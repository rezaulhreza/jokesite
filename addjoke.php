<?php


//import the template
require './functions/loadtemplate.php';

if (isset($_POST['joketext'])) {

	require './templates/connect.php';


	$date = new DateTime();

	$sql = 'INSERT INTO `joke` (joketext,jokedate) VALUES (:joketext, :jokedate)';

	$stmt = $pdo->prepare($sql);

	$values = [

		'joketext' => $_POST['joketext'], 
		'jokedate' => $date->format('Y-m-d H:i:s')

	];

	$stmt->execute($values);

	header('location: jokes.php');
} else {
	$title = 'Add a new joke';
	
	$output = loadTemplate('./templates/addjoke.html.php', []);
}

require  './templates/layout.html.php';
