<?php
    $text = <<<TEXT
    wsb - Wyższa
        szkoła
        bankowa
    TEXT;
    echo$text,'<hr>';
    echo'<br>';
    echo nl2br($text);
    echo'<br>';

    echo strtolower($text),'<br>';
    echo strtoupper($text),'<br>';
    echo ucfirst($text),'<br>';
    echo ucwords($text), '<br>';
    $name = 'jAnUsz';
    $name = ucfirst(strtolower($name));
    echo $name,'<hr>';

    $lorem = <<<LOREM
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate nibh sed velit dapibus bibendum. Donec placerat luctus gravida. In neque enim, mattis quis ultrices at, varius vel velit. Curabitur est purus, placerat a tincidunt sed, laoreet vel nunc. Quisque id neque egestas, venenatis erat et, ultricies libero. Duis placerat sed odio eu egestas. Suspendisse in tortor quis felis laoreet mattis.
        Vestibulum velit metus, malesuada vel pretium a, ultricies ut lorem. Nullam imperdiet ut erat feugiat hendrerit. Proin id maximus tellus. Aliquam imperdiet eros ac nunc ultricies condimentum eu ut justo. Fusce pretium eros id neque lobortis, ac venenatis dui pulvinar. Proin at bibendum purus, ac semper dui. Quisque dignissim hendrerit vulputate. Etiam placerat, neque vitae tincidunt accumsan, nulla metus efficitur velit, vitae accumsan turpis lacus ac nulla.
    LOREM;
    echo $lorem,'<hr>';
    $col = wordwrap($lorem, 40, '<br>');
    echo $col;
    echo'<br>';
    $col = wordwrap($lorem, 40, '<hr>');
    echo $col;
    
    echo'<hr>';
    echo'<br>';
    //usuwanie białych znaków
    $name = 'Kasia';
    $name1 = '  Kasia ';

    //echo $name, $name1;
    echo strlen($name);//5
    echo strlen($name1);//8
    echo '<br>';
    echo strlen(ltrim($name1));//6
    echo strlen(rtrim($name1));//7
    echo strlen(trim($name1));//5
    $name = trim($name);
    echo strlen($name);//5
    echo '<br>';

    //przeszukiwanie danych
    echo '<hr>';
    $text = 'Poznan, ul. Rynek Jeżycki 13, tel. 61627 00 00';
    $search= strstr($text,'tel');
    echo $search;
    echo '<br>';
    $search = stristr($text, 'Tel');
    echo $search;
    echo '<br>';
    $search = stristr($text, 'Tel', true);
    echo $search;
    echo '<br>';
    //czysczenie bufora
    ob_clean();
    //zad 1
    //znajdz domenę pobraną od użytkownika;

    //przetwarzanie ciagów znaków
    $replace=str_replace('%name%', 'Janusz', 'Masz na imię: %name%');
    echo $replace;
    echo '<br>';
    echo '<hr>';
    //substr
    $surname = substr('Katarzyna Nowak',3);
    echo $surname;//arzyna Nowak
    echo '<br>';
    $surname = substr('Katarzyna Nowak',3,5);
    echo $surname;//arzyn
    echo '<br>';
    echo '<hr>';


    $name = 'Mirosław';
    $censure = array('ą', 'ę', 'ś', 'ż', 'ź', 'ć', 'ó', 'ń', 'ł');
    $replace = array('a', 'e', 's', 'z', 'z', 'c', 'o', 'n', 'l');

    $correctName = str_replace($censure,$replace,$name);
    echo 'Dane przed poprawą: ',$name;
    echo '<br>';
    echo 'Dane po poprawie: ',$correctName;
    echo '<br>';
    echo '<hr>';



?>