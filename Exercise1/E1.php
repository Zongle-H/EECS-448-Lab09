<?php

$size = 100;

function printRow1($s) {
  echo "<td><tr></td>";
  for($i = 1; $i <= $s ; $i++) {
    echo "<td>$i</td>";
  }
  echo "</tr>";
}

function printRow($r, $s) {
    
    echo "<td><tr>$r</td>";
    for($i = 1; $i <= $s ; $i++) {
      $h = $r * $i;
      echo "<td>$h</td>";
    }
    echo "</tr>";
}