<?php 
$usa = [ 
['New York', 'NY', 8175133], 
['Los Angeles', 'CA', 3792621], 
['Chicago', 'IL', 2695598], 
['Houston', 'TX', 2100263], 
['Philadelphia', 'PA', 1526006], 
['Phoenix', 'AZ', 1445632], 
['San Antonio', 'TX', 1327407], 
['San Diego', 'CA', 1307402], 
['Dallas', 'TX', 1197816], 
['San Jose', 'CA', 945942] 
]; 

$states = [];

foreach(array_keys($usa) as $key){
    if(!array_key_exists($usa[$key][1], $states)){
         $states[$usa[$key][1]] = 0;
    }
    $states[$usa[$key][1]] += $usa[$key][2];
}
foreach($states as $key => $value){
    printf("%-3s %-8d\n", $key, $value);
}