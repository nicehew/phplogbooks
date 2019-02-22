<?php
echo $_SERVER["HTTP_USER_AGENT"] . "<br/>";
if(strpos($_SERVER["HTTP_USER_AGENT"],"Chrome")!=false)
{
  echo "You are using Chrome<br/>";
}
else
{
  echo "Why are you not using Chrome?";
}
?>
