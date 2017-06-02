<html>
<head>
	<title>Games</title>
	<link href="/Games-opdracht/css/gamesStyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<main>
	
	<header>
		<h1>Games</h1>
        <table>
    <th class="taskbar"><a class="taskbar" href="/Games-opdracht/Games">Home</a></th>
    <th class="taskbar"><a class="taskbar" href="/Games-opdracht/Games/Add">Add</a></th>
    <th class="taskbar"><a class="taskbar" href="/Games-opdracht/Games/Edit">Edit</a></th>
        </table>
	</header>
	<div class="container">
	<?php echo '<form action="' . URL . 'games/Add' . '" method="post">'; ?>
	
		<input type="text" name="Game" placeholder="Name of the games">
		<input type="text" name="Price" placeholder="Price">
		<input type="number" name="Publishers_id" placeholder="Publisher id">

		<input type="submit" value="Submit">
	
	</form>

</div>
	<footer>&copy; by Dennis V.B.</footer>
</main>
</body>
</html>