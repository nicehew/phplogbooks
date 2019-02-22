<?php
  $mymarks["year 1"] = 55;
  $mymarks["year 2"] = 65;
  $mymarks["year 3"] = 75;
  ?>
<body>
<table border=1 align="centre">
<tr><th>Year</th><th>Marks</th></tr>
<?php
while(list($index,$value) = each($mymarks))
{
  echo "<tr><td> $index </td><td> $value </td></tr> <br/>";
}
?>
</table>
</body>
  <?php
  echo "<br/>My best year was Year 3 when I averaged ". $mymarks["year 3"];
?>
