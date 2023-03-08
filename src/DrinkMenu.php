<?php

class DrinkMenu {
    private array $drinks;

    public function __construct(array $drinks){
        foreach ($drinks as $drink){
            if(! $drink instanceof Drink) throw new Error("DrinkMenu: Drinkを入れて下さい");
        }
        $this -> drinks = $drinks;
    }

    public function find(string $choice): Drink{
        foreach ($this->drinks as $drink){
            if(!$drink instanceof Drink) continue;
            if($drink->getName() == $choice) return $drink;
        }
        throw new Error("DrinkMenu.find: menuにないdrinkです");
    }
}
