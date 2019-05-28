<?php

namespace App\Core\Database;


class Connection
{
    public static function make(array $config)
    {
        try{

            return new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );

        }catch(PDOException $e){

            die($e->getMessage());
            
        }
    }
}