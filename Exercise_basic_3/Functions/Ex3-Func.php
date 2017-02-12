<?php
function my_function1(){
    $tag = '<img src="http://quickcodetechnologies.com/images/icon/php_icon.png"
    alt="A" width="600px" height="400px"';
    return  "$tag";
}
$GLOBALS = "https://cdn.worldvectorlogo.com/logos/";
function my_function2($a){
    $img = '<img src="'.$GLOBALS.$a.'" width="600px" height="400px"';
    return $img;
}