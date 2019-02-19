<html>
<body>
  <?php
  $hourlyrate = 5.75;
  $hoursperweek = 40;
  $taxrate = 0.22;
  $gross = $hourlyrate*$hoursperweek;
  echo $gross;
  ?>
  <br/>
  <?php
  $net = $gross - ($gross * $taxrate);
  echo $net;
   ?>
 </body>
 </html>
