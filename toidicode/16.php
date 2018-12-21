<?php

    //Count
    $array=[
        'toidicode.com',
        'Website học lập trình online'
        ];
    echo count($array);

    echo '</br>';
    //array_values
    $array = [
        'domain'=> ' toidicode.com',
        'desciption'=> 'Website học lập trình'
    ];
    print_r(array_values($array));
    echo '</br>';

    //Array_keys
    $array = [
        'domain'=> ' toidicode.com',
        'desciption'=> 'Website học lập trình'
    ];
    print_r(array_keys($array));
    echo '</br>';

    //Array_Pop - Hàm trả về phần tử cuối cùng của mảng\
    $array = [
        'domain'=> ' toidicode.com',
        'desciption'=> 'Website học lập trình'
    ];
    print_r(array_pop($array));
    echo '</br>';

    //array_push($array,$var,$var...)
    $array = [
        'domain'=> ' toidicode.com',
        'desciption'=> 'Website học lập trình'
    ];
    print_r(array_push($array,'Miễn phí nhé!'));
    echo '</br>';

    //array_shift($array) Xóa phần tử đầu tiên và trả về phần tử vừa xóa
    $array = [
        'domain'=> ' toidicode.com',
        'desciption'=> 'Website học lập trình'
    ];
    print_r(array_shift($array));
    echo '</br>';


    //Array_unshift - Thêm một hoặc nhiều, và trả về sl sau khi thêm
    $array = [
        'domain'=> ' toidicode.com',
        'desciption'=> 'Website học lập trình'
    ];
    print_r(array_unshift($array,'Học lập trình'));
    echo '</br>';

    //array_fip - có tác dụng chuyển đổi key của mảng thành value và ngược lại
    $array = [
        'domain'=> ' toidicode.com',
        'desciption'=> 'Website học lập trình'
    ];
    print_r(array_flip($array));
    echo '</br>';

    //sort - sắp xếp tăng dân và trả về giá trị TRUE nếu thành công và ngược lại
    $array = [3,6,8,5,7,4];
    sort($array);
    print_r($array);
    echo '</br>';

    // array_reverse - đảo ngược vị trí các phần tử
    $array = [5,4,3,2,1];
    print_r(array_reverse($array));

    echo '</br>';

    //array_merger - gộp hai hay nhiều mảng thành một mảng
    $array = [
        'domain' => 'toidicode.com',
        'description' => 'Website học lập trình online'
    ];
    $array1 = [5, 4, 3, 2, 1];
    print_r(array_merge($array, $array1));