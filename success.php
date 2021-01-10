<?php 
	
	session_start();
?>
</!DOCTYPE html>
<html>
<head>
	<title>You are now registered!</title>
</head>
<body>
	<h1>Welcome: <?php echo $_SESSION['email']; ?></h1>

</body>
</html>