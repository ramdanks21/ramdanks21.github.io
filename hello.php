<?php
session_start();

if($_SESSION['login'] != true){
    header('Location:login.php');
    exit();
}

$say = "Hello " . $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1><?= $say ?></h1>
<a href="login.php">Logout</a>
    
    
    
</body>
</html>

