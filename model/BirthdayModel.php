<?php

function getBirthdays(){
	$db = openDatabaseConnection();
	$query = $db->prepare("SELECT * FROM birthdays");
	$query->execute();
	return $query->fetchAll();
}

function addBirthday(){

}

function createBirthday(){

}