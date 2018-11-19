<?php
/**
 * Created by PhpStorm.
 * User: DomChuc
 * Date: 11/19/2018
 * Time: 10:20 AM
 */
$number = -11;
if( $number >= 0 && $number %2 ==0){
    $result = "Nguyên dương chẵn";
}
else if($number >= 0 && $number% 2 ==1){
    $result = "Nguyên dương lẻ";
}
else if($number < 0 && $number% 2 ==0){
    $result = "Nguyên dương lẻ";
}
else{
    $result = "Nguyên âm lẻ";
}
echo  $result;