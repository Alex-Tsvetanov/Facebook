<?php
	file_put_contents("php://stdout", "\nRequested: " . $_SERVER['REQUEST_URI'] . "\n");
	//file_put_contents("php://stdout", var_export ($_SERVER) . "\n");
	if (!is_dir(urldecode (__DIR__ . $_SERVER['REQUEST_URI'])) && file_exists(urldecode (__DIR__ . $_SERVER['REQUEST_URI'])))
	{
		$_GET['_uri'] = $_SERVER['REQUEST_URI'];
		return false;
	}
	else if (!is_dir(urldecode (__DIR__ . $_SERVER['REQUEST_URI'] . "/index.php")) && file_exists(urldecode (__DIR__ . $_SERVER['REQUEST_URI'] . "/index.php")))
	{
		$_GET['_uri'] = $_SERVER['REQUEST_URI'] . "/index.php";
		return false;
	}
	else
	{
		require ("router.php");
	}
?>
