<?php
echo '1.1 exercise <br>';
/*Ошибки таковы:
1. Сначала была ошибка в писании открывающего тега (нужно было забрать пробел)
2. Поменял print на echo
3. Апостроф не видился как знак
4. Ну и окончание было ??>, когда правильным является ?>.
И то закрывающий тег можно не использовать если в файле только php-код.*/
echo '- How are you? <br>';
echo '- I\'m fine.';

echo '<br>';
echo '<hr>';
echo '1.2 exercise <br>';
//Обьявляю цены нашей еды
$humburger = 4.95;
$milkshake = 1.95;
$cola = 0.85;
//Считаю общую цену, налог и чаевые
$total = 2*$humburger + $milkshake + $cola;
echo "Total cost is : " . $total . " $<br>";
$tax = $total * 0.075;
echo "Tax is: " . $tax . " $<br>";
$tip = $total * 0.16;
echo "Tip is: " . $tip . " $<br>";
$cost = $total + $tax + $tip;   //Общие затраты на пропитание
echo "All costs for food: " . round($cost,2) . " $<br>";

echo '<hr>';
echo '2 exercise <br>';
echo 'Look into "secondEx.php", please)';

echo '<hr>';
echo '3 exercise <br>';

$first_name = "Max";
$last_name = "Zagorsky";
echo $name = $first_name . " " . $last_name;
echo '<br>';
echo var_dump($name);// длинна строки

echo '<hr>';
echo '4 exercise <br>';

for($i = 1; $i<=5; $i++){
    echo $i . " ";
}
echo '<br>';
$m = 2;
while($m<=32){
    echo $m . " ";
    $m*=2;
}

echo '<hr>';
echo '5 exersise <br>';
echo "Done :)";
echo '<hr>';
