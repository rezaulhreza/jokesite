<?php

require './templates/connect.php';

require './functions/loadtemplate.php';

$sql = $pdo->prepare('SELECT * FROM joke');
$sql->execute();

$jokes=$sql->fetchAll();

$title = 'Joke list';


//template variable name
$templatevars=[
'jokes'=> $jokes

];


//get the output

$output = loadTemplate('./templates/list.html.php', $templatevars);



//get the layout
require  './templates/layout.html.php';
