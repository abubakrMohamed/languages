<?php
    if(!isset($_POST['number1']) || !isset($_POST['number2']) ) :?>
        <element>
        <?= 'مطلوب كتابة أرقام واختيار العملية الحسابية المطلوبة';?>
        </element> 
    <?else: 
        $operator = $_POST['operator'];
        //var_dump($operator);
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        switch ($operator) {
            case '1':
                $result = $number1 + $number2;
                break;
            case '2':
                $result = $number1 - $number2;
                break;           
            case '3':
                $result = $number1 / $number2;
                break;   
            case '4':
                $result = $number1 * $number2;
                break;        
            default:
                $result = 'فضلا أدخل الأرقام و اختر العملية الحسابية المطلوبة';
            break;
        }
    endif?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculater</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .num  {
            padding: 5px;
            margin: 10px;
            font-size: 20px;
            border: 1px solid rgba(0,0,0,0.5);
            }
        section {
            /* display: flex;  */

            }
        element {
            display: inline-flex;
            flex-direction: column;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            background: rgb(207,232,220);
            border: 2px solid rgb(79,185,227);
        }

    </style>
</head>
<body>
    <section>
        <form action="calculater.php" method="post">      
            <element>
                <label for="num1">Number1
                    <input type="number" name="number1" step=0.01 id="">
                </label>
            </element> 
            <element>
                <label for="operator">Operator
                    <select name="operator">
                        <option value="1">+</option>
                        <option value="2">-</option>
                        <option value="3">/</option>
                        <option value="4">*</option>    
                    </select>
                </label>
            </element>    
            <element>
                <label for="num2">Number2
                    <input type="number" name="number2">
                </label>
            </element>
            <element>
                <label for="calculate">Calculate
                    <input type="submit" value="Calculate &rarr;">
                </label>
            </element>
        </form>
        <element>
            <?
            if(!isset($result)) {
                echo $result = 'فضلا أدخل الأرقام و اختر العملية الحسابية المطلوبة';
            } else {
                echo $result;
            }?>
        </element>
    </section>
</body>
</html>