<?php

function getAllGames() 
{
	$db = openDatabaseConnection();

 	$sql = "SELECT * FROM games_db";
    $query = $db->prepare($sql);
    $query->execute();

	$db = null;

	return $query->fetchAll();
}