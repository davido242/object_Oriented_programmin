<!DOCTYPE html>
<html>
<head>
	<title>FCT list</title>
	<?php echo view('includes/header');?>
	<style type="text/css">
		h2{
			text-align: center;
			margin: 70px 10px;
		}
	</style>
	
</head>
<body>
	<h2>Login Successfully!</h2>
	<?php 
		$userName = $_REQUEST["username"];

		echo "<h2> This your name called $userName is Awesome!!</h2>"
	?>
</body>
</html>