<?php

     if (!isset($_POST['isMale']) || !isset($_POST['isTall'])) {
         echo 'Please Select your gender and Height';
    
     } else {
        $isTall = $_POST['isTall'];
        $isMale = $_POST['isMale'];

/*         if ($isMale && $isTall) {
            echo "You are tall man";
        } elseif ( $isMale && !$isTall) {
            echo "You are short man";
        } elseif (!$isMale && $isTall) {
            echo "You are tall but not man";
        } else {
            echo "You are short and not man";
        } */
        switch (1) {
            case ($isMale && $isTall):
            echo "You are tall man";
                break;

            case ($isMale && !$isTall):
            echo "You are short man";
                break;  

            case (!$isMale && $isTall):
            echo "You are tall but not man";
                break;                
                
            default:
            echo "You are short and not man";
                break;
        }
     }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    </style>
    <title>Associative array</title>
</head>
<body>
    <h2>Associative array</h2>

    <div>
        <form action="associativeArray.php" method="POST" class="">
            <div>
                <select name="isMale">
                    <option value=1>Male</option>
                    <option value=0>Female</optin>
                </select>
            </div>
            <div>
                <select name="isTall">
                    <option value=1>Tall</option>
                    <option value=0>Short</option>
            </div>
            <div>
                <br/>
                <input type="submit" value"Continue &rarr;">    
            </div>
        </form>
    </div>
</body>
</html>