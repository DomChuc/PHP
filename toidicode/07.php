<?php

    $tuoi = 19;
    if($tuoi <18){
        echo 'Bạn chưa đủ 18 tuổi';
    }else{
        echo 'Bạn đủ 18 tuổi nha!';
    }

    // Câu lệnh elseif
    $diem = 5;
    if($diem < 4){
        echo 'Bạn học lại !';
    }elseif ($diem >= 4 && $diem <=5.5){
        echo ' Điểm D';
    } elseif ($diem >= 5.6 && $diem <= 6.9){
        echo 'Bạn đạt điểm C';
    }elseif ($diem >= 7.0 && $diem <=7.9){
        echo 'Bạn đạt điểm B';
    }elseif ($diem >=8.0 &&$diem  <=10){
        echo 'Điểm A';
    }else{
        echo 'điểm khoogn hớp lệ';
}

        echo '</br>------------------------------</br>';

    //Câu lệnh else if lồng
    $d= 5;
    if($d <= 10){
        if($d <=4){
        echo 'Học lại';
    }else if($d >= 4 && $d <=8){
        echo 'Loại DCB';
    }else if($d >8.0 && $d <=10){
        echo "Loai A";
        }
    }else {
        echo 'Điểm không hợp lệ!';
    }
    ?>