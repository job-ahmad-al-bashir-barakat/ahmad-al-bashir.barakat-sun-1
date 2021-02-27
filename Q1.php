<?php
$arry = [4,5,6,7,8,2,9,1];
$first = $arry[0];
$min = $first;
$max = $first;

foreach($arry as $item) {
    
    if($item < $min) {
        $min = $item ;
    }

    if($item > $max) {
        $max = $item ;
    }
}

echo " min = $min and max = $max \n " ;
