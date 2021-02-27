<?php

for($i = 1; $i <= 5; $i++) {
    $stars = '';
    for($j = 1; $j <= $i; $j++) {
      $stars .= '*'; 
    }
    echo "$stars <br/>";
}

for($i = 5; $i >= 1; $i--) {
  $stars = '';
  for($j = 1; $j <= $i; $j++) {
    $stars .= '*'; 
  }
  echo "$stars <br/>";
}


