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
	<table>
    <tr>
        <th>Games</th>
        <th>Price</th>
    </tr>
<?php foreach ($Games as $game) { ?>
    <tr>
        <td><?= $game["name"]; ?></td>
        <td><?= $game["price"]; ?></td>
    </tr>
<?php } ?>
	</table>
	<footer>&copy; by Dennis V.B.</footer>
</main>
</body>
</html>