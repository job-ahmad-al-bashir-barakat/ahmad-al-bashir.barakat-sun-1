<?php 

$outputArray = [];
$inputArray = [1,2,3,1,4,5,2,3];

foreach($inputArray as $inputArrayItem) {
    foreach($outputArray as $outputArrayItem) {
        if($inputArrayItem == $outputArrayItem) {
            continue 2;
        }
    }
    $outputArray[] = $inputArrayItem;
}

print_r($outputArray);