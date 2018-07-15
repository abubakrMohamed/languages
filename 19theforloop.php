<?php

/*     $totalItems= 500;
    $itemPerPage = 25;
    $pageCount = ceil($totalItems / $itemPerPage);

    if ($pageCount > 1) {
        for ($i=1; $i < $pageCount; $i++) { 
            echo '<a href="?page=' . $i . '">' . $i . '</a> ';
        }
    } */ 

    $names = ['ali', 'omer', 'khaled', 'othman'];
    for ($i=0; $i < count($names); $i++) { 
        echo $names[$i] .'<br/>';
    }