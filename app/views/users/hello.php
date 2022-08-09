<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		table, th, td{
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<div>
		<a href="<?php echo URL_ROOT; ?>/Users/add">add data</a>
	</div>
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>email</th>
				<th>password</th>
				<th>action</th>
			</tr>
		</thead>
		<?php foreach($data['posts'] as $post) :?>
			<tr>
				<td><?php echo $post->id; ?></td>
				<td><?php echo $post->name; ?></td>
				<td><?php echo $post->email; ?></td>
				<td><?php echo $post->password; ?></td>
				<td><a href="<?php echo URL_ROOT; ?>/Users/update/<?php echo $post->id; ?>">update</a>  
					<a href="<?php echo URL_ROOT; ?>/Users/delete/<?php echo $post->id; ?>">delete</a></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>