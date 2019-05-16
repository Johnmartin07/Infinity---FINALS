<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="frm">
		<form action="process.php" method="POST">
			<p>
				<label>Username:</label>
				<input type="text" name="user" id="user" />
			<p>
				<label>Password:</label>
				<input type="password" name="pass" id="pass" />
			</p>
			<p>
				<input type="submit" value="Login" id="btn">
			</p>
		</form>
	</div>

</body>
</html>