<?php

    include_once('common.php');

/*     $keys = ['sky', 'grass', 'orange'];
    $values = ['blue', 'green', 'orange'];
    $arrays = array_combine($keys, $values);
    
    print_rpre($arrays);

    print_rpre(array_keys($arrays));

    print_rpre(array_values($arrays));

    print_rpre(array_flip($arrays)); */


//// Make Your Code Shorter ////

/*     $array = ['a', 'b', 'c'];
    // $a = $array['0'];
    // $b = $array['1'];
    // $c = $array['2'];
    // echo $a, $b, $c;
    
    list($a, $b, $c) = $array;
    echo $a, $b, $c; */

/*     $string = "ali, ahmed, 25, 0113020, ali@php.com, aliahmed";
    list($firstName, $lastName, , $mobile, $email, ) = explode(',', $string);
    echo $firstName, $lastName,  $mobile, $email; */

    $arrays = [[1, 2], [2, 3], [2, 5], [2,9]];
    foreach ($arrays as list($num1, $num2)) {
        
        $num = $num1 + $num2;
        $sumarray[] = $num;
    }
    print_rpre($sumarray);

