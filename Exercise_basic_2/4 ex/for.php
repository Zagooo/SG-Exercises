<?php
$celsius;

for($fahrenheit = -50; $fahrenheit<=50; $fahrenheit+=5){
    echo "<tr>";
    echo '<td align="center">' . $fahrenheit . "</td>";
    echo '<td align="center">' . $celsius = round((($fahrenheit-32)*5/9)) . "</td>";
    echo "</tr>";
}