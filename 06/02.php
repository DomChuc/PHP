<?php
/**
 * Created by PhpStorm.
 * User: DomChuc
 * Date: 11/19/2018
 * Time: 10:17 AM
 */
$number = 20;
        if($number % 2 == 0){
            $result =  "Số dương";
        }
        else{
            $rusult = "Số lẻ";
        }
        $result = ($number % 2 ==0) ? "Số chăn":"Số lẻ";
        echo $result;