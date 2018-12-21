<?php

    //Khởi tạo Cookie
    setcookie('user','admin',time()+600);
    // Lấy giá trị của Cookie
    $_COOKIE['user'];


    //Xóa Cookie
    setcookie('user','admin',time()-100);