<?php
    //Cấu trúc hàm
    function tinhTong($a,$b){
        return $a+$b;

        function readName($name = 'Hello Set Tham Số'){
            echo 'GÌ ĐÓ'.$name;
        }

        //Gọi hàm
        function readName($name = 'world'){
            echo 'hello'.$name;
        }

        readName(); // Gọi hàm không truyển tham số
        readName('Chúc'); //Gọi hàm truyền tham số
        $a = 'Toi đi code';
        readName($a); //Gọi hàm


        echo '</br>------------------------------------------</br>';

        //Đề bài: viết hàm kiểm tra số nếu số lớn hơn 10 thì in ra 'lớn hơn 10' và nhỏ hơn hoặc bằng 10 thì in ra 'nhỏ hơn bằng 10':

        function checkNumber($number = 0 ){
            if($number > 10){
                echo 'Lớn hơn';
            }else {}
            echo 'Số nhỏ hơn';
        }
        checkNumber();
        checkNumber(19);
        echo '</br>';


        //Hàm với vòng lặp
        function loopNumber($n = 0){
            for($i=0 ; $i <= $n; $i++){
                echo $i;
            }
            loopNumber();
            loopNumber(10);
        }
    }
        echo '</br>------------------------------------------</br>';
        //Kiểm tra hàm đã tồn tại chưa

        if(function_exists('loopNumber')){
        function loopNumber($n = 0){
            for($i = 0; $i <=$n ; $i++){
                echo $i;
            }
        }
        }
        ?>