<?php
    $a = 5;
    $b = 'toidicode';
    echo 'Toán tử gán</br>';



    $a = 1+1;
    $b = 1-1;
    $c = 1*1;
    $d = 1/1;

    echo $a,  $b, $c,  $d ;
    echo '</br>';

    $result  = ($a == $b); // False
    $result  = ($a != $b); //True
    $result  = ($a < $b); //True
    $result  = ($a <= $b); //True
    $result  = ($a >= $b); //False
    $result  = ($a > $b); //False

    echo '</br>';
    $a = 5;
    $b = 6;

    $result = (($a+7)==6) && (5==0); //False
    echo 'Toán tử logic';

    $a = 6;
    $b=6;

    $a *= $b;
?>