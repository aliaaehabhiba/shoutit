<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="frm">
<form action="process.php" method="POST">
	<p>
		<label>username:</label>
		<input type="text" id="user" name="user">
	</p>
    <p>
		<label>password:</label>
		<input type="password" id="pass" name="pass">
	</p>
	<p>
		<input class="btn" type="submit" name="btn" value="login">
	</p>
</form>
	
</div>
</body>
</html>