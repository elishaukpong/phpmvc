<?php

function dd($data){
    echo "<pre>";
    die(var_dump($data));
    echo "</pre>";
}

function connectToDb(){
    try{
        return new PDO('mysql:host=127.0.0.1;dbname=mvc', 'root', '');
    }catch(PDOException $e){
        die('Could not connect!');
    }
}

function fetchAllTasks( $pdo )
{
    $statement = $pdo->prepare('select * from task');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}