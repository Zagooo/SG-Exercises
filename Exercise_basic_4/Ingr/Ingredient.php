<?php
class Ingredient{
    private $name;
    private $cost;

    public function getName(){
        return $this->name;
    }
    public function getCost(){
        return $this->cost;
    }
    public function changeCost($cost){
        $this->cost = $cost;
    }

    public function __construct($name, $cost){
        $this->name = $name;
        $this->cost = $cost;
    }
}

$pizza = new Ingredient("pizza", 45);
echo "Price of pizza now is: " . $pizza->getCost() . PHP_EOL;
$pizza ->changeCost(50);
echo "Changed price: " . $pizza->getCost() . PHP_EOL;
