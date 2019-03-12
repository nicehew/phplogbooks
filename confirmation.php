<?php
session_start();
   echo "<h2> Your order qty is $_SESSION[selqty] </h2></br>";
   echo "<h2> And the selected colour is $_POST[selcolour].</h2></br>";
   if($_SESSION["selsize"] == "Small")
   {
     echo "<h2> Your total is " . $_SESSION["selqty"]*15.75 . "</h2>";
   }
   elseif($_SESSION["selsize"] == "Medium")
   {
     echo "<h2> Your total is " . $_SESSION["selqty"]*16.75 . "</h2>";
   }
   elseif($_SESSION["selsize"] == "Large")
   {
     echo "<h2> Your total is " . $_SESSION["selqty"]*17.75 . "</h2>";
   }
   elseif($_SESSION["selsize"] == "Extra Large")
   {
     echo "<h2> Your total is " . $_SESSION["selqty"]*18.75 . "</h2>";
   }
?>
