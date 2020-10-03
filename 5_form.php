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
    <input type="submit" value="Wyślij dane">
    </form>
    <?php
    if(isset($_GET['name'])){
        $name = $_GET['name'];
        echo'Twoje imie: ',$name;
    
    }
    else{
        echo '<hr>Wypełnij dane!';
    }
    ?>
</body>
</html>