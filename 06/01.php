<?php
/**
 * Created by PhpStorm.
 * User: DomChuc
 * Date: 11/19/2018
 * Time: 10:15 AM
 */
    $number = 20;
    if($number % 2 == 0){
        echo "Số dương";
    }
    $rusult = ($number % 2 == 0)? "Số chẵn":"";
    echo  $rusult;