<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="resources/style.css" />
		<embed src="resources/TheMachine.mp3" autostart="true" loop="true" width="0" height="0">
</embed> 
		<title>Hackinator Forum</title>
	</head>
	<body>
		<?php
		//add session check here
		if (!isset($_GET['page'])) {
			include 'views/connexion.php';
		} else {
			switch (filter_input(INPUT_GET, "page")) {
				case "connexion": include 'views/connexion.php';
					break;
				default : include 'views/connexion.php';
					break;
			}
		}
		?>
	</body>
</html>
