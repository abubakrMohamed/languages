<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
<<<<<<< HEAD
    
    <title>POST and GET</title>
</head>
<body>
<?php
    if (!(isset($_POST['submit']))) { ?>
        <form action="29postandget.php" method="POST" id="myform">
        <label for="username">Username</label>
        <input type="text"  name="username" id="username">
        <label for="password">Password</label>
        <input type="password"  name="password" id="password">
        <button type="submit"   name="submit"   value="submit"  id="onclick">Log in</button>
    </form>

  <?php  return ;}?>


=======
=======
>>>>>>> 476f81e909a42d464225f0dba7ac539f35e0905a
    <style>
        form {
            display: none;
        }
    </style>
    <title>POST and GET</title>
</head>
<body>
    <div id="div">
        <form action="29postandget.php" method="POST" id="myform">
            <label for="username">Username</label>
            <input type="text"  name="username" id="username">
            <label for="password">Password</label>
            <input type="password"  name="password" id="password">
            <button type="submit"   name="submit"   value="submit"  id="onclick">Log in</button>
        </form>
    </div>
>>>>>>> 476f81e909a42d464225f0dba7ac539f35e0905a
    <?php
        echo "your user name is: ".$_POST['username']."<br>";
        echo "your password is: ".$_POST['password']."<br>";
    ?>
<<<<<<< HEAD

=======
    <script>
        document.getElementById("onclick")
            .addEventListener("click", function() {
            document.getElementById("myform").hidden = true;
            // document.getElementById("awesome").hidden = false;
});
    </script>
>>>>>>> 476f81e909a42d464225f0dba7ac539f35e0905a

</body>
</html>