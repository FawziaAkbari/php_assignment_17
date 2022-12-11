<?php

class  Connection{
    public static function maker() {
        try {
            return new PDO('mysql:host=localhost;dbname=users2','root','');
        }
        catch (PDOException $e) {
            die('Error : ' . $e->getMessage());
        }
    }
}