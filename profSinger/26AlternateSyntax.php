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
        
    <?php if(empty($number)) : ?>
            <h2>Enter your Number </h2>
            <?php  else : ?>
                <h2>Your number is <?= $number ?></h2>

                <ul>
                    <?php for($i=1; $i <=$number; $i=$i*2) : ?>
                    <li> <?= $i;  ?> </li>
                    <?php endfor ?>
                </ul>
            <?php endif ?>

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