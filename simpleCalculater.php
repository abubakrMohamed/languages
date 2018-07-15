<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculater</title>
</head>
<body>
    <h2>Simple Calculater</h2>
    <form>
        <input type = "text" name = "num1" placeholder = "Number 1">
        <input type = "text" name = "num2" placeholder = "Number 2">
        <select name = "operator">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br>
        <button type = "submit" name = "submit" vlue = "submit">Click to Calculate </button>
    </form>

    <?php

        if (isset($_GET['submit'])) {
            switch (true) {
                case (($_GET['num1'] && $_GET['num2']) == null):
                    echo 'Plese Enter correct number';
                    break;  

                case ($_GET['operator'] == "None"):
                    echo 'Plese select which process you want';
                    break;

                default:
                    $operator = $_GET['operator'];
                    $num1 = $_GET['num1'];
                    $num2 = $_GET['num2'];
                    $value = null;
                    switch ($operator) {
                        case 'Add':
                            $value = $num1 + $num2;
                            break;
                        
                        case 'Subtract':
                            $value = $num1 - $num2;
                            break; 

                        case 'Multiply':
                            $value = $num1 * $num2;
                            break;    
                        
                        case 'Divide':
                            $value = $num1 / $num2;
                            break;
                    }
                    if (!($value === null)) {
                        echo "<p> The answer is {$value}</p>";
                    }
        }
    }
        
    ?>

</body>
</html>