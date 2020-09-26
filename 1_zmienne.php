<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zmienne</title>
</head>
<body>
    Pierwszy Plik
    <?php
    $name='Anna';
    echo'Imię: $name<br>';
    echo'Imię: $name<br>';
    echo"Imię: $name<br>";
    //konkatenacja
    echo'WSB'.'<hr>';
    //skaładnia heredoc
    $text = <<<LABEL
    Heredoc<br>
    Imię: $name<br>
    LABEL;

    
    echo <<<L
    Heredoc
    Imię: $name<hr>
    L;
    //integer
    $bin = 0b1010;
    $oct = 011;
    $hex = 0x11;
    echo $bin;
    echo $oct;
    echo $hex,'<hr>';
    $city='Poznań';
    echo "Nazwa zmiennej: \$city, wartosc $city<br>";

    $x = true;
    $x = false;
    echo $x;

    //Wersja php
    echo PHP_VERSION;
    echo phpinfo();
    ?>
</body>
</html>