<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $GLOBALS = "https://cdn.worldvectorlogo.com/logos/";
    function my_function2($a){
        $img = '<img src="'.$GLOBALS.$a.'" width="600px" height="400px"';
        return $img;
    }
    echo my_function2("php-1.svg");
    ?>
</body>
</html>