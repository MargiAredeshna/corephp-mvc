<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="<?php echo URL_ROOT; ?>/Users/adddata" method="post">
		<label>name</label><br>
		<input type="text" name="name"><br>
		<label>email</label><br>
		<input type="email" name="email"><br>
		<label>password</label><br>
		<input type="text" name="password"><br>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>