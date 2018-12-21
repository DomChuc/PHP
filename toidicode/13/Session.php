<?php
     //Thêm session
    $_SESSION['user'] = 'admin';

    $array =[5,8,7,6,4,5,6];

    $_SESSION['user']=$array;

    //Sửa Session
    $_SESSION['user'] ='Ta Văn Chúc';
    $_SESSION['user'] = 'Tôi đi code';

    // Kiểm tra session
    if(isset($_SESSION['user'])){
        echo $_SESSION['user'];
    }

    //Xóa session
    unset($_SESSION['user']);

    /*
        session_destroy(); Xóa tất cả session chúng ta sử dụng
         unset($_SESSION);
     */