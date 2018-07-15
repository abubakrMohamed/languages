<?php

/*     $totalLesson = 30;
    $compeletedLesson = 7;
    $percentageCompleted = number_format(($compeletedLesson / $totalLesson) * 100);
    echo "You already completed {$percentageCompleted}% keep going."; */

/*##-- This code will not increse counter--##
    $views = 0;
    $views = $views++;
    echo $views;
##--------------------##*/
/*     $views = 0;
    $views = $views + 1;
    echo $views; */

/*     $views = 0;
    $views += 1;
    echo $views; */
 
/*     $views = 0;
    $views = ++$views;
    echo $views; */

    $rows = 30;
    for ($row=0; $row < $rows; $row++) { 
        if ($row % 2 === 0) {
            echo "Even<br/>";
        } else {
            echo "Odd<br/>";
        }
        
    }
