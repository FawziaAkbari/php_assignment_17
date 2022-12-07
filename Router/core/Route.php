<?php

class Route {


    protected $source = [];

    public static function load($file) {

        $rout = new static;
        require $file;
        return $rout;
    }

    public function defin($source) {
        $this->source = $source;
    }

    public function direct ($uri) {
        if(array_key_exists($uri, $this->source)) {
            return $this->source[$uri];
        }

        throw new Exception("Not defined rout!");

        }
}