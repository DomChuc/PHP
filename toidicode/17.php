<?php
        //Mở file
    $file = @fopen('data.txt', 'r');
    if (!$file)
        echo "Mở file không thành công";
    else
        echo "Mở file thành công";
    //Đọc file

    //Đọc từng kí tự
    $file = @fopen('data.txt','r+'); // Dọc từng kí tụ
    if(!$file){
        echo "Mở file không thành công";
    }else{
        while (!feof($file)){
            echo fgetc($file);
        }
    }

    //Đọc từng dòng
    $file = @fopen('data.txt','r+');
    if(!$file){
        echo "Mở file không được";
    }else{
        while (!feof($file)){
            echo fgets($file);
        }
    }

    //Đọc hết file
    $file = @fopen('data.txt','r+');
    if(!$file){
        echo "Hỏng";
    }else{
        echo fread($file,filesize('data.txt'));
    }

    //Ghi file,đóng file
    $file = @fopen('data.txt','w');
    if(!$file){
        echo "Hỏng";
    }else{
        $data= 'Tôi ghi dòng này vào file nhé!';
        fwrite($file,$data);
        fclose($file);
    }

