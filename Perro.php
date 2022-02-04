<?php
require('Animal.php');
class Perro extends Animal{

    public function comer(){

        echo "<p>Perro comiendo huesos</p>";
    }

    protected function dormir(){

        echo "<p>Perro durmiendo</p>";
    }
}