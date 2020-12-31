<!DOCTYPE html>
<html>
<head>
	<?php echo view('includes/header');?>
</head>
<body>
	<h2>Form to send data to a page</h2>
	
	<div class="form_container">
		<form action="sucess_page" method="GET">
			<p>Login Page!</p>
			<p><input type="text" name="username" placeholder="User Name" required></p>
			<p><input type="password" name="password" placeholder="Password" required></p>
			<input type="number" name="age">
			<input type="submit" value="submit">
		</form>
		<div id="to_be_replaced">
			
		</div>
	</div>
	


	<?php echo view('includes/footer');?>
</body>
</html>