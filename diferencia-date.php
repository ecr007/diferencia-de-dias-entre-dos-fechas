<?php
  $date1 = new DateTime('08/16/2013');
  $date2 = new DateTime('08/23/2013');
  $diff = $date1->diff($date2);
  print_r($diff); // or $diff->days
  
  DateInterval Object
  (
    [y] => 0
    [m] => 0
    [d] => 7
    [h] => 0
    [i] => 0
    [s] => 0
    [invert] => 0
    [days] => 7
  )
?>
