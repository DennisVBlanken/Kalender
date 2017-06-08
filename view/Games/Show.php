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
	<table>
    <tr>
        <th>Games</th>
        <th>Price</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
<?php foreach ($Games as $game) { ?>
    <tr>
        <td><?= $game["name"]; ?></td>
        <td><?= $game["price"]; ?></td>
        <td><?php echo '<a href="' . URL . 'Games/Edit/' . $game['id'] . '">Edit</a>'; ?></td>
        <td><?php echo '<a href="' . URL . 'Games/Delete/' . $game['id'] . '">Delete</a>'; ?></td>
    </tr>
<?php } ?>
	</table>
	<footer>&copy; by Dennis V.B.</footer>
</main>
</body>
</html>