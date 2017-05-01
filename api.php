<?php
	class MySQL
	{
		public  $servername = "localhost";
		private $username = "root";
		private $password = "tts2002";
		
		public $dbname;
		public $conn;
		
		function __construct (string $dbname_param)
		{
			$this->dbname = $dbname_param;
			$this->conn = new mysqli ($this->servername, $this->username, $this->password, $this->dbname);
			if ($this->conn->connect_error) 
			{
				die("Connection failed: " . $this->conn->connect_error);
			}
		}
		
		function __destruct ()
		{
			$this->conn->close ();
		}
		
		function query (string $command)
		{
			return ($this->conn->query ($command));
		}
	}

	$dbname = "Facebook";

	$conn = new MySQL ($dbname);
	
	$conn->query ("INSERT INTO `JobsQuiz` (`Email`, `Name`, `Gender`, `Locale`) VALUES ('{$_REQUEST["email"]}','{$_REQUEST["name"]}','{$_REQUEST["gender"]}','{$_REQUEST["locale"]}')");
	echo "INSERT INTO `JobsQuiz` (`Email`, `Name`, `Gender`, `Locale`) VALUES ('{$_REQUEST["email"]}','{$_REQUEST["name"]}','{$_REQUEST["gender"]}','{$_REQUEST["locale"]}')";
	
?>
