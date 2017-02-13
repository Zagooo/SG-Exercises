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

$ca = 0; 
$tx = 0; 
$ny = 0; 
$il = 0; 
$pa = 0; 
$az = 0; 

// плохо! см. замечания у Никиты, все то же самое

foreach($usa as $info => $arr){ 
    foreach($arr as $key => $value){ 
            switch($value){ 
            case "CA": 
            $ca += $arr[2]; 
            break; 
            case "TX": 
            $tx += $arr[2]; 
            break; 
            case "NY": 
            $ny += $arr[2]; 
            break; 
            case "IL": 
            $il += $arr[2]; 
            break; 
            case "PA": 
            $pa += $arr[2]; 
            break; 
            case "AZ": 
            $az += $arr[2]; 
            break; 
            } 
    } 
} 

printf("%-2s: %-8d\n", 'NY', $ny); 
printf("%-2s: %-8d\n", 'CA', $ca); 
printf("%-2s: %-8d\n", 'IL', $il); 
printf("%-2s: %-8d\n", 'TX', $tx); 
printf("%-2s: %-8d\n", 'PA', $pa); 
printf("%-2s: %-8d\n", 'AZ', $az);
