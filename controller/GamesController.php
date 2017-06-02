<?php

require(ROOT . "model/GamesModel.php");


function index(){
	render('Games/index', array(
	'Publishers' => getAllPublishers()
	));
}

function show($id) {
	render('Games/Show', array(
		'Games' => getGamesFromPublishers($id)
	));
}
function add() {
	render('Games/Add');
	if (isset($_POST["Game"])) {
		$game = $_POST["Game"];
		$publishers_id = $_POST["Publishers_id"];
		$price = $_POST["Price"];
	
		$result = createGame($game, $publishers_id, $price);
		if ($result == "Yes") {
			header('location: /Games-opdracht/Games');
		}
	}
}
function edit($id) {
	render('Games/Edit', array(
		"game" => getGame($id)
		));
}
function editSave() {

}