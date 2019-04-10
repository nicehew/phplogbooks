<?php include("class_lib.php"); ?>
<?php
	$stefan = new person("Stefan Mischook");
	$jimmy = new person("Nick Waddles");

	echo "Stefan's full name: " . $stefan->get_name();
	echo "</br>";
	echo "Nick's full name: " . $jimmy->get_name();
	echo "</br>";

	$james = new employee("Johnny Fingers");
		echo "---> " . $james->get_name();
?>
