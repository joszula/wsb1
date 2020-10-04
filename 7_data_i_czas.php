<?php
    echo"rok-miesiąc-dzień".date("Y-m-d"),'<br>';
    echo"rok-miesiąc-dzień".date("Y-M-d").'<br>';
    echo date("G:i:s"),'<br>';
    echo date("Y-m-d G:i:s"),'<br>';
    echo date("w"),'<br>';//0 - niedziala 1 - poniedziałek 
    $data = getdate();
    echo'<pre>';
    print_r($data);
    echo'</pre>';

    //wyświetla datę w następującym formacie 4 pazdzierkia 2020 | niedziela
    /*echo date("d");
    $x = date("mon");
    $m = array('styczeń', 'luty', 'marzec', 'kwiecień', 'maj', 'czerwwiec', 'lipiec', 'sierpień', 'wrzesień', 'październik', 'listopad', 'grudzień');
    echo $m($x);
    echo date("Y");
    */
    

?>