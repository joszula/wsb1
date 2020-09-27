<?php
//operacje bitowe
//and &, or |,not ~, xor ^,<<,>>
$x = 0b1010;
$x = $x <<2;
$x = $x >>1;
echo"$x<br>" ;
//porównanie
$x=1;
$y=1.0;
if ($x==$y) {
    echo'$x jest równa $y<br>';
}
else{
    echo'$x jest równa $y<br>';
}
if ($x===$y) {
    echo'$x jest równa $y<br>';
}
else{
    echo'$x nie jest identyczna $y<br>';
}
echo gettype($x);//integer
echo gettype($y);//double

$x=-10;
$y=1;

echo $x<=>$y;
echo '<hr>';

$x=2;
$x=$x++;
echo$x;
$y=$x++;
echo"$x<hr>";

$x=1;
$x=$x++;
echo$x;
$x=++$x;
echo$x;
$y=$x++;
echo$x;
echo$y;
$y=++$x*2-1;
echo$x;
echo$y;

//operatory rzutowania
//boll, int, float, string, array, object, unset
$x='123abc45';
echo"$x<br>";
echo'Typ danych $x: ',gettype($x),'<br>';
$x=(int)$x;
echo"$x<br>";
echo'Typ danych $x: ',gettype($x),'<hr>';

$x=0;
echo"$x<br>";
echo'Typ danych $x: ',gettype($x),'<br>';
$x=(bool)$x;
echo"$x<br>";
echo'Typ danych $x: ',gettype($x),'<hr>';

$x=10;
echo"$x<br>";
echo'Typ danych $x: ',gettype($x),'<br>';
$x=(float)$x;
echo"$x<br>";
echo'Typ danych $x: ',gettype($x),'<hr>';

$x=10;
echo"$x<br>";
echo'Typ danych $x: ',gettype($x),'<br>';
$x=(unset)$x;
echo"$x<br>";//false
echo'Typ danych $x: ',gettype($x),'<hr>';//null

//rozmiar typu integer
echo PHP_INT_SIZE,'<br>';

//kontrola typu zmienych
//is_int(), is_float(),is_numeric(), is_boll(),is_null(),
$x=1.0;
echo is_numeric($x);
$w;
//operator ignorowania błędów
echo @gettype($w);
//stała predefinowana
echo PHP_VERSION,'<br>';
$ver = PHP_VERSION;
if ($ver >= 7.4) {
    echo'Nowa wersja php';
}
else{
    echo'Stara wersja php';
}
echo'<br>';
//stałe
//nazwy z dużych liter
define('NAME', 'Janusz',true );
echo NAME;

?>