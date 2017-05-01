<!DOCTYPE html>
<html>
	<head>
		<title>Какво ще работиш?</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Вижте какво ще работите! Тук и сега!">
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
					
					$email = urldecode($_REQUEST["email"]);
					$result = $conn->query("SELECT * FROM `JobsQuiz` WHERE `Email`='{$email}'");
//					echo ("SELECT * FROM `JobsQuiz` WHERE `Email`='{$email}'");
					
					if ($result->num_rows == 1) 
					{
						$row = $result->fetch_assoc();
						
						if ($row["Result"] === '[{"name":"1","value":"2"},{"name":"2","value":"2"},{"name":"3","value":"1"}]') 
						{
							$result = "Програмист";
							
							echo str_replace (
								"{{name}}",
								$row["Name"],
								'<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <h4 class="modal-title" id="myModalLabel">{{name}}</h4> </div><div class="modal-body"> Ще e Програмист!<br><br>Използвай <a href="https://techedu.cf">TechEdu++</a>, за да станеш по-добър от него!<br><br>Сподели резултата му с прилятелите си! Използвай бутона отдолу.<br><iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Ffb.techedu.cf%2Fshow.php%3Femail=' . $row["Email"]	. '&layout=button&size=large&mobile_iframe=true&appId=1818518568468396&width=73&height=28" width="73" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe><br>Или направи и ти този тест:<br><a class="btn btn-info btn-raised" href="http://fb.techedu.cf">Тест „Какво ще работиш?“</a> </div><div class="modal-footer"></div></div></div></div>'
							);
						}
						else 
						{
							$result = "Обикновен работник";
							
							echo str_replace (
								"{{name}}",
								$row["Name"],
								'<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <h4 class="modal-title" id="myModalLabel">{{name}}</h4> </div><div class="modal-body">Ще е средностатистически работник!<br><br>Можеш да си по-добър от него! Влез в <a href="https://techedu.cf">TechEdu++</a> и стани супер як програмист!<br><br>Сподели резултата му с прилятелите си! Използвай бутона отдолу.<br><iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Ffb.techedu.cf%2Fshow.php%3Femail=' . $row["Email"] . '&layout=button&size=large&mobile_iframe=true&appId=1818518568468396&width=73&height=28" width="73" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe><br>Или направи и ти този тест:<br><a class="btn btn-raised btn-info" href="http://fb.techedu.cf">Тест „Какво ще работиш?“</a>  </div><div class="modal-footer"></div></div></div></div>'
							);
						}
						echo "<script>window.document.onload = window.onload = function () { $('#myModal').modal('show'); }; </script>";
					}
					else
					{
						echo "<h1 class='text-danger'>There are no user with this mail!</h1>";
					}
				?>
	</body>
</html>

