<?php
  $topModules[0] = "Internet Systems Development";
  $topModules[1] = "Programming 1";
  $topModules[2] = "Programming 2";
  $topModules[3] = "OOAD";
  $topModules[4] = "Software Engineering";
  $topModules[5] = "Web Applications";
  $topModules[6] = "Open Source Systems";

  for($count = 0; $count < 7; $count++)
  {
    echo ($count + 1) . " module is $topModules[$count] <br/>";
  }
?>
