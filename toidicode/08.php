<?php
    //Câu lệnh Switch Case
    /*switch ($bien){
        case 'giatri1':;
            #code
        break;
        case 'giatri2':;
            #code
        break;
        default:
            #code
            break;
    }*/

    //Demo
    $so = 5;
    switch ($so){
        case 1:
            echo 'một';
        break;
        case 2:
            echo 'hai';
            break;
        case 3:
            echo 'ba';
            break;
        case 4:
            echo 'bốn';
            break;
        case 5:
            echo 'năm';
            break;
        default:
            echo 'số nằm ngoài phạm vi';
            break;
    }


    echo '</br>=-=-=-=-=-=-=-=-=-=-=-=-=-=</br>';
    //SWITCH Lồng
    $so = 5;
    switch ($so) {
        case 1:
            echo "một";
            break;

        default:
            switch ($so) {
                case 2:
                    echo "hai";
                    break;
                case 3:
                    echo "ba";
                    break;
                case 4:
                    echo "bốn";
                    break;
                case 5:
                    echo "năm";
                    break;
                default:
                    echo "Số không hợp lệ";
                    break;
            }
            break;
    }
    ?>