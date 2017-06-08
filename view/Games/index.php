<html>
<head>
	<title>Publishers</title>
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
        <th>Id</th>
        <th>Publishers</th>
        <th>Show</th>
    </tr>
    <?php foreach($Publishers as $publisher) { ?>
    <tr>
        <td><?= $publisher["id"]; ?></td>
        <td><?= $publisher["publisher"]; ?></td>
        <td><?php echo '<a href="' . 'Games/Show/' . $publisher['id'] . '">Show</a>'; ?></td>
    </tr>
    <?php } ?>
</table>

	<footer>&copy; by Dennis V.B.</footer>
</main>
</body>
</html>