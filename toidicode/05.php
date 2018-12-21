<?php
    // Int
    $a = 1;
    $a = -1;
    $a = 0x1A ;
    $a = 0b11;

    echo $a;
    echo '</br>----------</br>';
    //Số thực
    $float = 0.1;

    //Kiểu Boolean
    $is_Male = True;

    echo $float;
    echo '</br>----------</br>';
    //Kiểu chuỗi
    $string = "toidicode.com";

    echo '</br>';
    $a =' toidicode.com';
    $b = '100';

    is_string($a);
    is_string($b); // false
    echo $string;
    echo '</br>----------</br>';

    //Khai báo mảng
    $array = array('Gia trị 1','Gía trị 2'); // Cách 1

    $array = ['Gia trị 1','Gía trị 2']; //Cách 2  PHP>=5.4


    $ten = array('CHÚC','HUY','TUẤN');
    print_r($ten);

    echo $ten[1];
    echo '</br>';
    $tenmang ['key'] = 'value'; // Thêm phần tử vào mảng

    $ar = array('Toi','di');
    $ar[] = 'code';
    print_r($ar);
    echo '</br>';

    $mang['index'] = 'giá trị mới'; //Sửa phần tử trong mảng

    $m = 'Mảng bất tuần tự';
    $mang = [];
    $mang [] = 'giá trị';
    $mang ['key'] = 'giá trị';
    $mang ['key'] = 'giá trị mới';
    echo $m;

    echo '</br>';
    $n = null;
    //$bienMoi = (kieudulieu) $bien;
    $a = 9;
    $b = (string) $a;
?>