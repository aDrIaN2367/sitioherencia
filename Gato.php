<?php
require('Animal.php');
class Gato extends Animal{

    public function comer(){

        echo "<p>Gato comiendo</p>";
    }

    public function dormir(){

        echo "<p>Gato durmiendo</p>";
    }
}