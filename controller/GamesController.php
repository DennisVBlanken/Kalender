<?php

require(ROOT . "model/GamesModel.php");


function index(){
	render('Games/index', array(
		'Games' => getAllGames()
	));
}

function show($id) {
	render('Games/Show', array(
		'Games' => getAllGames()
	));
}

function create() {

}

function createSave() {

}

function edit($student_id) {

}

function editSave() {

}

function delete() {

}