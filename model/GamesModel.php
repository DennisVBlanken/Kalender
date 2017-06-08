<?php

function getAllGames() {
	$db = openDatabaseConnection();

 	$sql = "SELECT * FROM games_db";
    $query = $db->prepare($sql);
    $query->execute();

	return $query->fetchAll();
}

function getAllPublishers() {
	$db = openDatabaseConnection();

 	$sql = "SELECT * FROM publishers";
    $query = $db->prepare($sql);
    $query->execute();

	return $query->fetchAll();
}

function getGamesFromPublishers($publishers_id) {
	$db = openDatabaseConnection();

    $query = $db->prepare("SELECT * FROM games_db WHERE publishers_id = :publishers_id");
    $query->bindParam(":publishers_id", $publishers_id);
    $query->execute();

	return $query->fetchAll();
}
function getGame($id) {
	$db = openDatabaseConnection();

    $query = $db->prepare("SELECT * FROM games_db WHERE id = (:id)");
    $query->bindParam(':id', $id);
    $query->execute();

	return $query->fetch(PDO::FETCH_ASSOC);
}
function createGame($game, $publishers_id, $price) {
	$db = openDatabaseConnection();

	$sql = "INSERT INTO games_db(name, publishers_id, price) VALUES (:name, :publishers_id, :price)";

	$query = $db->prepare($sql);

	$query->bindParam(':name', $game);
	$query->bindParam(':publishers_id', $publishers_id);
	$query->bindParam(':price', $price);

	$query->execute();

	$db = null;

	return "Yes";
}
function EditGame($id, $game, $publishers_id, $price) {
	$db = openDatabaseConnection();

	$sql = "UPDATE games_db SET name = (:name), publishers_id = (:publishers_id), price = (:price) WHERE id = (:id)";

	$query = $db->prepare($sql);

	$query->bindParam(':id', $id);
	$query->bindParam(':name', $game);
	$query->bindParam(':publishers_id', $publishers_id);
	$query->bindParam(':price', $price);

	$query->execute();

	$db = null;

	return "Yes";
}

function deleteGame($id) {
	$db = openDatabaseConnection();

	$sql = "DELETE FROM games_db WHERE id = (:id)";

	$query = $db->prepare($sql);

	$query->bindParam(':id', $id);

	$query->execute();

	$db = null;

	return "Yes";
}



// Door © Dennis V.B.