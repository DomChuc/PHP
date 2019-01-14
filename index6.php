<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <h1>1 . Viết ra 1 chương trình php tính tuổi của 1 người khi biết ngày tháng năm sinh của họ</h1>
    <form name="abc" action="" method="post" type="text">
    <p>D <input type="number" value="" name="ngay"></p>
    <p>M <input type="number" value="" name="thang"></p>
    <p>Y <input type="number" value="" name="nam"></p>
        <?php
        if(isset($_POST['ngay']) && isset($_POST['thang'])&& isset($_POST['nam'])){
            $nam = 2019;

            echo $nam-($_POST(['nam']));
        }
        ?>
    </form>
</body>
</html>