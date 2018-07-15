<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculate f</title>
</head>
<body>
    <h3>Select your numbers to add</h3>
    <form>
        <input type="text"  name="num1" placeholder="first Number">
        <input type="text"  name="num2" placeholder="last Number">
        <br>
        <button type="submit" name"submit" value="submit">make Sum</button>
    </form>


<?php

    if (isset($_GET['submit'])) {
        switch (true) {
            case (($_GET['num1'] && $_GET['num2']) == null):
                echo 'Plese Enter correct number';
                break;  
/* 
            case (is_int($_GET['num1'] && $_GET['num2'])):
                echo 'Plese Enter correct number';
                break;

            default:
                
                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];
                $numbers = range($num1,$num2);
                $value = null;

                function add(array $numbers) {
                    $total = 0;
                    foreach ($numbers as $number) {
                        $total += $number;
                    }
                    return $total;
                }

            if (!($total === 0)) {
                echo "<p> The answer is {$total}</p>";
            } */
        }
    }
    ?>

</body>
</html>