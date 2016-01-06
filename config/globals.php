<?php
	$sourceBase = "../src/";
	# Database Connection..
	$dbc = mysqli_connect('localhost', 'root', '', 'humarikaksha') OR
				die('Could not connect because : '.mysqli_connect_error());

?>
<?php include($sourceBase.'/css.php'); ?>
<?php include($sourceBase.'/js.php'); ?>
