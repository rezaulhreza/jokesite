<?php

require './templates/connect.php';

require './functions/loadtemplate.php';

$sql = $pdo->prepare('SELECT * FROM joke');
$sql->execute();

$title = 'Joke list';


//template variable name
$templatevars=[
'sql'=> $sql

];


//get the output

$output = loadTemplate('./templates/list.html.php', $templatevars);



//get the layout
require  './templates/layout.html.php';
