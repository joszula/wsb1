<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
    <form method="get">
    <input type="text" name="name">
    <input type="submit" value="Wyślij dane" placeholder="Imię">
    Regulamin:<input type="checkbox" name="info"><br>
    Wybierz kolor:
    <label><input type="radio" name="color2" checked> czarny</label>
    <label><input type="radio" name="color2">biały</label>
    <input type="color" name="color"><br>
    </form>
    <?php
    if(!empty($_GET['name'])&& !empty($_GET['color']))
    {
        $name = $_GET['name'];
        $color = $_GET['color'];
        echo'Twoje imie: ',$name;
        echo "<br>Kolor: $color";
    
    }
    else{
        echo '<hr>Wypełnij wszystkie dane!';
    }
    if (isset($_GET['info']))
     {
        echo'Zgody zatwierdzone';
    }
    else{
        echo 'Zatwierzdz zgody';
    }
    /*pola radio z wyborem jaki kolor(biały czy czarny)

    imię
    nazwisko
    rok urodzenia
    miasto
    kod pocztowy
    kolor -> type'color'

    Dokonaj wyświetlenia danych na stronie jak bedą wszystkie dane

    Wykonaj sanitizacji kodu tzn
    imię: Jan
    nazwisko Nowak
    ro urodzenia 1980
    miasto Poznan
    kod pocztowy wyświetl tylko cyframi

    Dane wysłane za pomocą post
    Wyswietl kolor (usun zanka #), wyswietl to w kolorze prze użytkownika

    Jeśli użytkownik poda polskie znaki w mieśćie to zamień je na ***
    */
    
    ?>
</body>
</html>