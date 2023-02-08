<?php

class VendingMachine{

    private $drinkMenu;

    public function __construct(DrinkMenu $drinkMenu){
        $this -> drinkMenu = $drinkMenu;
    }

    private function acceptChoice(string $choice): Drink {
        // search menu from drinks.

        return new Cora();
    }

    private function acceptPayment(array $coins): Payment {
        // convert into Payment
        return new Payment($coins);
    }

    public function calculateChange(array $coins, string $choice): string {
        Drink: $acceptedChoice = $this->acceptChoice($choice);
        Payment: $acceptedPayment = $this->acceptPayment($coins);

        if (VendingMachineLogic::isAvailable($acceptedChoice, $acceptedPayment)){
            return "change";
        }
        return "nochange";
    }
}
