<?php

require(ROOT . "model/BirthdayModel.php");

function index(){

	echo "verjaardagslijst";
	render("Birthday/overzicht",array(
		"birthdays" => getBirthdays()
	));
}

function delete($id) {
	
}