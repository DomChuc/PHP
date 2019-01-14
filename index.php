<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <h1>1 . Viết ra 1 chương trình chuyển hướng khi người dùng chọn trang và click submit</h1>

    <form name="aa" method="post" action="">
        <p>
            Nhập trang web cần chuyển hướng đến :
            <input type="text" name="web" value="">
        </p>
        <input type="submit" value="Chuyển hướng">
        <?php
        header('Location: http://www.vforum.vn/');
        header('Location: http://www.24h.com/');
        header('Location: http://www.W3school.com/');

        /*<?php
        if(isset($_REQUEST['web'])){
            $ten = $_REQUEST['web'];
            header('Location:'.$ten);
        }
        ?>*/
        ?>
    </form>






</body>
</html>