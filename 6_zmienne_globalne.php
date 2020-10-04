<?php
    $x = 10;
    function change(){
        //echo "Wartosc /$x w funkcji wynosi $x";//error
        echo "Wartosc \$x w funkcji wynosi $GLOBALS[x]";
    }
    echo '<br>';
    change();
    function changeLocal(){
        $x = 5;
        echo "<br>Wartosc \$x w funkcji wynosi $x";//error
        //echo "Wartosc \$x w funkcji wynosi $GLOBALS[x]";
    }
    changeLocal();
    echo '<hr>';
    //zmienne statyczne
    function add(){
        $x = 4;
        $x +=10;
        echo"<br>Zmienna x wynosi: $x";
    }
    add();
    add();
    function addStatic(){
        static $x = 4;
        $x +=10;
        echo"<br>Zmienna x wynosi: $x";
    }
    addStatic();
    addStatic();
    addStatic();
    echo '<hr>';
    //przekazywanie argumentów przez wartość
    function addRef($x){
        $x +=3;
    }

    $num=10;
    echo"<br> Zmienna \$num: $num";
    addRef($num);
    echo"<br> Zmienna \$num: $num";
    addRef($num);
    echo"<br> Zmienna \$num: $num";
    // przekazywanie argumentów przz waretosc
    /*function addRef(&$x){
        $x +=3;
    }

    $num=10;
    echo"<br> Zmienna \$num: $num";
    addRef($num);
    echo"<br> Zmienna \$num: $num";
    addRef($num);
    echo"<br> Zmienna \$num: $num";
    */
    //argumenty domyślne
    function multi($x, $y=4){
        return $x*$y;
    }
    $a = 3;
    echo multi(2,4);
    echo multi($a);

    function multi1(int $x, int $y = 5){
        return $x*$y; 
    }
    echo multi1(1);
    echo multi1(3,5);
    echo multi1(3.5,5)

?>