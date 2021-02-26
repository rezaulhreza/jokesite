<?php
require './templates/connect.php';
$id = $_GET['id'];
$sql = $pdo->prepare("DELETE FROM joke WHERE `id` = ?");
$sql->execute([$id]);
$results  = $sql->rowCount();
if (isset($results)) {

    header('location:jokes.php');
}
