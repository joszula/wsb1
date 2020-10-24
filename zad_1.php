<!

    imię
    nazwisko
    rok urodzenia
    miasto
    kod pocztowy
    kolor - type'color'

    Dokonaj wyświetlenia danych na stronie jak bedą wszystkie dane

    Wykonaj sanitizacji kodu tzn
    imię: Jan
    nazwisko Nowak
    rok urodzenia 1980
    miasto Poznan
    kod pocztowy wyświetl tylko cyframi

    Dane wysłane za pomocą post
    Wyswietl kolor (usun zanka #), wyswietl to w kolorze prze użytkownika

    Jeśli użytkownik poda polskie znaki w mieśćie to zamień je na ***>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
    <form method="POST">
    Imię:
    <input type="text" name="name">
    <br>
    Nazwisko:
    <input type="text" name="surname">
    <br>
    Data urodzenia:
    <input type="date" name="data">
    <br>
    Miasto:
    <input type="text" name="city">
    <br>
    Kod pocztowy:
    <input type="text" name="postcode">
    Kolor:
    <input type="color" name="color"><br>
    <input type="submit" value="Wyślij dane">
    </form>
    <?php
    if(!empty($_POST['name'])&& !empty($_POST['surname']) && !empty($_POST['data']) && !empty($_POST['city'])&& !empty($_POST['postcode'])&& !empty($_POST['color']))
    {
        // imie i nazwisko
        $name = ucfirst(strtolower( $_POST['name']));
        $surname =ucfirst(strtolower( $_POST['surname']));
        echo'Imie: ',$name;
        echo'<br>Nazwisko: ',$surname;
        //data urodzenia
        $date=substr($_POST['data'],0,4);
        echo '<br>Rok urodzenia: ',$date;
        //miasto
        $city = $_POST['city'];
        $censure = array('ą', 'ę', 'ś', 'ż', 'ź', 'ć', 'ó', 'ń', 'ł');
        $replace = '***';
        $correctCity = ucfirst(strtolower(str_replace($censure,$replace,$city)));
        echo'<br>Miasto: ',$correctCity;
        //kod pocztowy
        $postcode=str_replace('-','',$_POST['postcode']);
        echo '<br>Kod pocztowy: ',$postcode;
        //kolor
        $color=$_POST['color'];
        $correctColor=str_replace('#','',$color);
        echo '<br> Kolor: ';
        echo '<span style="color:'.$color.'">';
        echo $correctColor;
        echo'</span>';
    }
    else{
        echo '<hr>Wypełnij wszystkie dane!';
    }
    ?>
</body>
</html>