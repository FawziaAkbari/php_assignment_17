<?php

class Connection {

    public static function maker($config) {
        try {

            return new PDO(
                $config['connection'].';dbname='.$config['dbname'],
                $config['username'],
                $config['password'],
                $config['options']
            );
            // $pdo = new PDO('mysql:host=localhost;dbname=users', 'root', '');
            // return $pdo;
            // echo "Connection succed!";
        }
        catch(PDOException $e) {
            die( 'Errorr: '. $e->getMessage());
        }
    }
}

// $pdo = Connection::maker();
// $result = $pd->maker()->prepare('select * from user');
// $result->execute();
// $res = $result->fetchAll(PDO::FETCH_OBJ);
// echo "<pre>";
// var_dump($res);