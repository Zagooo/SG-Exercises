<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise 3</title>
</head>
<body>
<p align="center">First function</p>
    <p align="center"><?php 
    require 'Ex3-Func.php';
    echo my_function1();
    ?>
    </p>
    <p align="center">Second function</p>
    <p align="center"><?php
    echo my_function2("php-1.svg");
    ?>
    </p>
</body>
</html>