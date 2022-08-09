<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<form action="<?php echo URL_ROOT; ?>/Users/updatedata/<?php echo $data['posts']->id; ?>" method="post">
		<label>name</label><br>
		<input type="text" name="name" value="<?php echo $data['posts']->name; ?>"><br>
		<label>email</label><br>
		<input type="email" name="email" value="<?php echo $data['posts']->email; ?>"><br>
		<label>password</label><br>
		<input type="text" name="password" value="<?php echo $data['posts']->password; ?>"><br><br>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>