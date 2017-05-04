<?php

require(ROOT . "model/AuthorModel.php");


function index(){
	render('Author_plaza/index', array(
		'authors' => getAllAuthors()
	));
}

function show($id) {
	echo "hoi je zit in #" . $id;
}
