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
        </table>
	</header>
	<div class="container">
	<?php echo '<form action="' . URL . 'games/Add' . '" method="post">'; ?>
	
		<input type="text" name="Game" placeholder="Name of the games"><br>
		<input type="text" name="Price" placeholder="Price"><br>
		<input type="number" min="1" max="6" name="Publishers_id" placeholder="Id"><br>

		<input type="submit" value="Submit">
	</form>

</div>
	<footer>&copy; by Dennis V.B.</footer>
</main>
</body>
</html>