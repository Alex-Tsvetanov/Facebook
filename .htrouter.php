<?php
	file_put_contents("php://stdout", "\nRequested: " . $_SERVER['REQUEST_URI'] . "\n");
	if (!file_exists(__DIR__ . '/' . $_SERVER['REQUEST_URI'])) {
		$_GET['_url'] = $_SERVER['REQUEST_URI'];
	}
	return false;
?>
