<!DOCTYPE html>
<html>
	<head>
		<title>Какво ще работиш?</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="The core aim of our project is to create online learning management system that combines best practices in organizing training so that it will be interesting, useful and much easier for the students. The most important part of our project is to fertilize future programmers, showing them that it is not as difficult as it sounds. This will happen through brief and extensive online practical competitions taken their levels, with certificates and prizes for the best ones.">
		<meta name="author" content="TechEdu ++">
		<meta name="keywords" content="Learning, Online, System, Presentations, Videos, Exam">
		<meta name="distribution" content="web">
		<meta name="robots" content="index, follow">
		<meta name="google-site-verification" content="eCU54DH_8vQnzWO0Q3fXoQmalvA3rCjiXSH6mZdDgkg">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="icon" href="favicon.png">
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
		<link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-material-design.min.css">
		<link rel="stylesheet" href="css/ripples.min.css">
		<link rel="stylesheet" href="css/snackbar.min.css">
		<link rel="stylesheet" href="css/extension.css">
		<link href="css/jumbotron.css" rel="stylesheet">
		<link href="css/quiz.css" rel="stylesheet">
		<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
	</head>
	<body>
		<script src="js/sdk.js"> </script>

		<div class="jumbotron">
			<div class="container">
				<center>
					<img class="img-responsive" src="img/fb.png">
				</center>
			</div>
		</div>
		<div class="container">
			<div class="row" id="content">
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
					
					$result = $conn->query("SELECT * FROM `JobsQuiz` WHERE `Email`='{$_REQUEST["email"]}'");
					
					$row = $result->fetch_assoc();
					
					if ($row["Result"] === '[{"name":"1","value":"2"},{"name":"2","value":"2"},{"name":"3","value":"1"}]') {
						$result = "Програмист";
						
						echo str_replace (
							"{{name}}",
							$row["Name"],
							'<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <h4 class="modal-title" id="myModalLabel">{{name}}</h4> </div><div class="modal-body"> Ще си Програмист!<br><br>Използвай <a href="https://techedu.cf">TechEdu++</a>, за да се развиваш още по-бързо!<br><br>Сподели резултата с прилятелите си! Използвай бутона отдолу.<br><iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Ffb.techedu.cf%2Fshow.php%3Femail=' . $row["Email"]	. '&layout=button&size=large&mobile_iframe=true&appId=1818518568468396&width=73&height=28" width="73" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe> </div><div class="modal-footer"></div></div></div></div>'
						);
					}
					else {
						$result = "Обикновен работник";
						
						echo str_replace (
							"{{name}}",
							$row["Name"],
							'<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <h4 class="modal-title" id="myModalLabel">{{name}}</h4> </div><div class="modal-body">Ще си средностатистически работник!<br><br>Можеш да промениш това! Влез в <a href="https://techedu.cf">TechEdu++</a> и стани супер як програмист!<br><br>Сподели резултата с прилятелите си! Използвай бутона отдолу.<br><iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Ffb.techedu.cf%2Fshow.php%3Femail=' . $row["Email"] . '&layout=button&size=large&mobile_iframe=true&appId=1818518568468396&width=73&height=28" width="73" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe> </div><div class="modal-footer"></div></div></div></div>'
						);
					}
					echo "<script>$('#myModal').modal('show');</script>";
				?>
			</div>
		</div>
		
		<script src="js/quiz.js"></script>
		<script src="js/facebook.js"> </script>
		<script src="js/jquery.min.js"></script>
		<script src="js/tether.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/material.min.js"></script>
		<script src="js/ripples.min.js"></script>
		<script src="js/snackbar.min.js"></script>
		<script src="js/jquery.nouislider.min.js"></script>
		<script src="js/jquery.cookie.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>

