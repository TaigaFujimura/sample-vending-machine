<?php
class Drink{

    private string $name;
    private int $price;

    public function __construct(string $name, int $price){
        if(null == $name) throw new Error("Drink: 名前を指定して下さい");
        if($price<0) throw new Error("Drink: {$name}の値段が間違っています");

        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): int {
        return $this->price;
    }
}
