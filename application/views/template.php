<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body {
			font-family: calibri;
		}
		table {
			width: 500px;
			border-collapse: collapse;
		}
		table td, table th {
			border: 1px solid lightgrey;
			padding: 10px;
		}
		.add {
			background-color: #67BA56;
			color: #fff;
			border: none;
			padding: 10px 15px;
			border-radius: 2px;
			cursor: pointer;
		}
		.add:hover {
			background-color: #579F4A;
		}
		a {
			text-decoration: none;
		}
		.remove {
			background-color: #F34541;
			color: #fff;
			border: none;
			padding: 7px 12px;
			border-radius: 2px;
			cursor: pointer;
		}
		.remove:hover {
			background-color: #FF0000;
		}
	</style>
</head>
<body>

	<h1><?php echo $title; ?></h1>

	<form action="<?php echo base_url()?>index.php/control/insert_to_table" method="post">
		<label>name</label>
		<input type="input" name="name">
		<br><br>
		<label>color</label>
		<input type="input" name="color">
		
		<br><br>
		<input class="add" type="submit" name="submit">
		<br><br>
	</form>

	<table>
		<tr><th>Name</th> <th>Color</th><th>Action</th></tr>

		<?php foreach($fruits as $fruit) { ?>
			<tr>
				<td><?php echo $fruit->name; ?></td>
				<td><?php echo $fruit->color; ?></td>
				<td><a class="remove" href="<?php echo base_url()?>index.php/control/delete_from_table/<?php echo $fruit->id ?>">Remove</a></td>
			</tr>
	    <?php } ?>

    </table>
</body>
</html>