<?php
  $scores = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];
  $sum = 0;

  for ($i = 0; $i <= 9; $i++) {
      $sum += $scores[$i];
  }
  echo $sum / 10;
?>
