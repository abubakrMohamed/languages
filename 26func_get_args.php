<?php

/*     function add() {
        $total = 0;
        $numbers = func_get_args();
        foreach ($numbers as $number) {
            if (!(is_numeric($number))) {
                echo "Please Enter valide value";
                return;
            }
            $total += $number;
        }
        return $total;
    }

    echo add(1, 2, 3, "4"); */

/*     function add() {
        $numbers = func_get_args();
        foreach ($numbers as $number) {
            if (!(is_numeric($number))) {
                echo "Please Enter valid value";
                return;
            }
        }
        return array_sum($numbers);
    }
    echo add(1, 2, 3, 4); */

    $add = function() {
        $numbers = func_get_args();
        foreach ($numbers as $number) {
            if(!(is_numeric($number))) {
                echo "Please Enter valid number";
                return;
            }
        }
        return array_sum($numbers);
    };
    echo $add(1, 2, 3, 4);