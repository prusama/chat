<?php 
	//require_once();
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
</head>
<body>
	<header>
		<ul>
			<li>Your nickname: <?= $_SESSION['nick']; ?></li>
		</ul>
	</header>
</body>
</html>