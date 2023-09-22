<?php

class Cat{
    public $name;
    public $color;
    
    public function __construct($name){
        $this->name = $name;
    }
    public function sayHello(){
        echo 'Mew';
    }

    public function sayName(){
        echo $this->name;
    }
}

$cat1 = new Cat('Murka');
$cat1->sayname();
echo '<br>';
$cat1->sayHello();
