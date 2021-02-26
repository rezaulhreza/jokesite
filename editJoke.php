<?php


require './templates/connect.php';

//import the template
require './functions/loadtemplate.php';

$id = $_GET['id'];



$sql = $pdo->prepare("SELECT * FROM joke WHERE `id` = ?");

$sql->execute([$id]);

$results = $sql->fetch();

if (isset($_POST['joketext'])) {
    $joke = $_POST['joketext'];

    $sql = $pdo->prepare("UPDATE `joke` SET `joketext`= ? WHERE `id` = ?");
    $sql->execute([$joke, $id]);
    $results = $sql->rowCount();
    if (isset($results)) {
        header('location:jokes.php');
    }
} else

{
    
    $title = 'Edit joke';

    $templatevars= [

        'results'=>$results

    ];
   
    $output = loadTemplate('./templates/editjoke.html.php',$templatevars
);
}
require  './templates/layout.html.php';
