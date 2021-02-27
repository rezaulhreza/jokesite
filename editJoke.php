<?php


require './templates/connect.php';

//import the template
require './functions/loadtemplate.php';


if(isset($_POST['joketext'])){

$sql=$pdo->prepare('UPDATE joke SET joketext=:joketext WHERE id=:id');


$sql->execute(['joketext'=>$_POST['joketext'],'id'=>$_POST['id']]);

header('location:jokes.php');
} else{

    $title='Edit Joke';


    $sql=$pdo->prepare('SELECT * FROM joke WHERE id=:id');
    $sql->execute(['id'=>$_GET['id']]);

    $joke=$sql->fetch();

    $templatevars=[
        'joke'=>$joke
    ];

    $output = loadTemplate('./templates/editjoke.html.php',$templatevars);
}

//get the layout
require  './templates/layout.html.php';