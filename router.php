<?php
	{
		echo file_get_contents('.' . $_SERVER['REQUEST_URI'], FILE_USE_INCLUDE_PATH);
		return false;
	}
?>
