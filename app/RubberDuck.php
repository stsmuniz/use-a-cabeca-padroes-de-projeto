<?php
namespace App;

class RubberDuck extends Duck
{
    public function display() {
        return 'parece um pato de borracha';
    }

    public function quack() {
    	return "squeak";
    }
}

