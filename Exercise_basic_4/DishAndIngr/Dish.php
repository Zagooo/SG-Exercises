<?php

require_once 'Ingredient.php';

class Dish{

    private $dish = [];

    function addIngr($ingr){
        if($ingr instanceof Ingredient){
            $this->dish[] = $ingr;
        }else{
            die("hui tebe");
        }
    } 

    function getTotalCost(){
        $totalCost;
        foreach($this->dish as $ingr){
            $totalCost += $ingr->getCost();
        }
        return $totalCost;
    }
    
    function showDish($total){
        echo "total cost of ur dish: " . $total . PHP_EOL;
    }
}
    
    $omelet = new Dish;
    $omelet->addIngr(new Ingredient('eggs', 5));
    $omelet->addIngr(new Ingredient ('milk', 15));

    $soup = new Dish;
    $soup->addIngr(new Ingredient ('chicken', 20));
    $soup->addIngr(new Ingredient ('rice', 7));
    $soup->addIngr(new Ingredient ('garlic', 2));
    $soup->addIngr(new Ingredient ('carrot', 14));
    $soup->addIngr(new Ingredient ('salt', 5));

    $omelet->showDish($omelet->getTotalCost());
    $soup->showDish($soup->getTotalCost());