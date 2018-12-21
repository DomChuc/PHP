<?php
    //Vòng lặp For
    for ($i = 0;$i<=10; $i ++){
        echo 'Tôi đang chạy đến số'.$i.'</br>';
    }

    //Vòng lặp Foreach
    $data = ['A','B','C','D'];

    foreach ($data as $key => $value){
        echo "Đây là phần tử có key = $key và có giá trị = $value </br>";
    }
    echo '---------------------------------------------</br>';
    foreach ($data as $value){
        echo "Gía trị phần tử = $value </br>";
    }

    echo '---------------------------------------------</br>';
    // For và foreach Lồng
    for ($i = 0; $i <= 10; $i++) {
        for ($j = $i; $j <= 10; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    // Duyệt mảng 2 chiều với for và foreach lồng nhau
    $data = [0=>1,1=> [3 => 4,5=>6]];
    foreach ($data as $v){
        if(is_array($v)){
            foreach ($v as $va){
                echo $va.'</br>';
            }
        }else{
            echo $v.'</br>';
        }
    }