<?php

require 'Task.php';


try{
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=mvc', 'root', '');
}catch(PDOException $e){
    die('Could not connect!');
}

$statement = $pdo->prepare('select * from task');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

// echo "<pre>";
// var_dump($todos);
// echo "</pre>";



require 'index.view.php';