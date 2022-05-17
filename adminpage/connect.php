<?php
	try
	{
		$con = new PDO('mysql:host=localhost;dbname=restaurant_website','root','');
	}
	catch(PDOException $ex)
	{
		echo "Failed to connect with database ! ".$ex->getMessage();
		die();
	}
?>