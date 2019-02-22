<?php
$mymarks[453] = 54;
$mymarks[457] = 63;
$mymarks[450] = 55;
$mymarks[454] = 46;
$mymarks[451] = 52;
$mymarks[452] = 60;
$total = 0;

while(list($index,$value) = each($mymarks))
{
  echo "For  $index  my grade was  $value <br/>";
  $total = $total + $mymarks[$index];
}

echo "<br/>Your total mark was $total <br/>";
$average = $total /  6;
echo "Your average mark was $average";
 ?>
