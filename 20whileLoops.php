<?php

/*     $currentNumber = 1;
    $endAt = 10;
    $incrementedBy = 2;
    while ($currentNumber <= $endAt) {
        echo "{$currentNumber}<br>";
        $currentNumber += $incrementedBy;
    } */

    $wantedNumber = 4;
    while (($riceRolled = rand(1,6)) != $wantedNumber) {
        echo "number genrated is: {$riceRolled}, and number wanted is: {$wantedNumber} <br>";
    }
    echo "Yes that's number genrated {$riceRolled} equal number wanted {$wantedNumber}";