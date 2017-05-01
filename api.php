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
	
	$person = json_decode($_REQUEST["person"]);
	$answers = $_REQUEST["answers"];
	
	if ($answers === '[{"name":"1","value":"2"},{"name":"2","value":"2"},{"name":"3","value":"1"}]') {
		$result = "Програмист";
		
		$iframeShareLink = "http://www.facebook.com/sharer/sharer.php?s=100&p[url]=" . urlencode("http://fb.techedu.cf/show.php?email={$person->email}") . "&p[title]=" . urlencode("Какво ще работиш?") . "&p[summary]=" . urlencode("Аз ще се развивам с TechEdu++, за да стана още по-добър програмист! А ти?");
		echo "<script>console.log ('{$iframeShareLink}');</script>";
		
		echo str_replace (
			"{{name}}",
			$person->name,
			'<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <h4 class="modal-title" id="myModalLabel">{{name}}</h4> </div><div class="modal-body"> Ще си Програмист!<br><br>Използвай <a href="https://techedu.cf">TechEdu++</a>, за да се развиваш още по-бързо!<br><br>Сподели резултата с прилятелите си! Използвай бутона отдолу.<br><a href="' . $iframeShareLink . '><img src="facebookshare.png" class="img-responsive" /></a></div><div class="modal-footer"></div></div></div></div>'
		);
	}
	else {
		$result = "Обикновен работник";

		$iframeShareLink = "http://www.facebook.com/sharer/sharer.php?s=100&p[url]=" . urlencode("http://fb.techedu.cf/show.php?email={$person->email}") . "&p[title]=" . urlencode("Какво ще работиш?") . "&p[summary]=" . urlencode("Аз ще се развивам с TechEdu++, за да стана програмист! А ти?");
		echo "<script>console.log ('{$iframeShareLink}');</script>";

		echo str_replace (
			"{{name}}",
			$person->name,
			'<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <h4 class="modal-title" id="myModalLabel">{{name}}</h4> </div><div class="modal-body">Ще си средностатистически работник!<br><br>Можеш да промениш това! Влез в <a href="https://techedu.cf">TechEdu++</a> и стани супер як програмист!<br><br>Сподели резултата с прилятелите си! Използвай бутона отдолу.<br><a href="' . $iframeShareLink . '><img src="facebookshare.png" class="img-responsive" /></a></div><div class="modal-footer"></div></div></div></div>'
		);

	}
	$conn->query ("INSERT INTO `JobsQuiz` (`Email`, `Name`, `Gender`, `Locale`, `Result`) VALUES ('{$person->email}','{$person->name}','{$person->gender}','{$person->locale}', '{$answers}')");
	//echo ("INSERT INTO `JobsQuiz` (`Email`, `Name`, `Gender`, `Locale`, `Result`) VALUES ('{$person->email}','{$person->name}','{$person->gender}','{$person->locale}', '{$answers}')");
?>
