<?php

$x = 3 ; $y=$x++;
// $x = $x + 1; // $x = 4;

// $x = 4;  
echo "x $x <br/>";
// $y = 3;
echo "y $y <br/>";

// $x = $x + 1; // $x = 5;
$y+= ++$x; // $y = $y + $x 

// $x = 5;  
echo "x $x <br/>";
// $y = 8;  
echo "y $y <br/>";

// $y = 7; $x = 5

if ($y == 7) {
    $x++;
    echo $x ."<br>";
 }
else if ($y == 8) {
    // $x = 5;
    $x--; // $x = $x - 1;
    // $x = 4;
 	echo $x ."<br>";
}
else if ($y == 9) {
	$x+=2;
	echo $x ."<br>";
}
else { 
    $x= 0;
	echo $x ."<br>"; 
}
