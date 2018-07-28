<?php 
    $number = "";
    if (isset($_POST['number'])) {
        $number = $_POST['number'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="content">
        <?php
            if(empty($number)) {
                echo "<h2>Enter your Number </h2>";
            } else {
                echo '<h2>Your number is '.$number.'</h2>';
                echo "<ul>";
                    for ($i=0; $i <=$number; $i++) { 
                    echo '<li>'.$i.'</li>';
                    }
                echo "</ul>";
            }
        ?>
        <form action="26AlternateSyntax.php" method="post">
            <p>
                <label for="number">Number</label>
                <input type="number" name= "number" value="<?= $number ?>" id="number">
            </p>
            <p>
                <input type="submit" value="Continue &rarr;">
            </p>
        </form>
    </div>
    
</body>
</html>