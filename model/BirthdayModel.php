 <?php

 function getBirthdays(){

 	$db = openDatabaseConnection();

 	$query = $db->prepare("SELECT * FROM birthdays WHERE month = 2");

 	$query->execute();

 	return $query->fetchAll();
 }