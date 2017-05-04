
<html>
<head>
	<title>Publishers</title>
	<link href="css/gamesStyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<main>
	
	<header>
		<h1>Games</h1>
	</header>
	<table>
<?php
$link = mysqli_connect("localhost", "root", "", "game_database");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM publishers";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Publisher</th>";
                echo "<th>Show</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['publisher'] . "</td>";
                echo "<td>" . '<a href="' . 'Games/show/' . $row['id'] . '">Show</a>' . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
	</table>
	<footer>&copy; by Da Vinci College</footer>
</main>
</body>
</html>