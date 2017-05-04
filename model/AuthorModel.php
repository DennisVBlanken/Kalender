<?php

function getAllAuthors() 
{
	$db = openDatabaseConnection();

 	$sql = "SELECT * FROM authors";
    $query = $db->prepare($sql);
    $query->execute();

	$db = null;

	return $query->fetchAll();
}