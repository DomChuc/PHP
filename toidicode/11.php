<?php
    $i=0;
    while($i<=10){
        echo $i.'</br>';
        $i++;
    }

    // Vòng lặp do-while
    do{
        echo $i.'</br>';
        $i++;
    }while($i<=10);

    //While, Do - While lồng nhau

    while ($i <=10){
        $j = $i;
        while($j<=10){
            echo '*';
            $j++;
        }
        echo '</br>';
        $i++;
    }

    do {
        $j = $i;
        do {
            echo '*';
            $j++;
        } while ($j <= 10);
            echo '</br>';
            $i++;

    }while ($i <= 10);
?>