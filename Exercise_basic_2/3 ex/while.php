<?php
$fahrenheit  = -50;
$celsius;

while($fahrenheit<=50){
    echo "<tr>";
    echo '<td align="center">' . $fahrenheit . "</td>";
    echo '<td align="center">' . $celsius = round((($fahrenheit-32)*5/9)) . "</td>";
    echo "</tr>";
    $fahrenheit += 5;
}