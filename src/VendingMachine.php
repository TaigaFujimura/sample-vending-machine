<?php
require_once 'DrinkMenu.php';
require_once 'Drink.php';
require_once 'Payment.php';
require_once 'VendingMachineLogic.php';

class VendingMachine{

    private DrinkMenu $drinkMenu;

    public function __construct(DrinkMenu $drinkMenu){
        $this -> drinkMenu = $drinkMenu;
    }

    private function acceptChoice(string $choice): Drink {
        return $this->drinkMenu->find($choice);
    }

    private function acceptPayment(array $coins): Payment {
        // convert into Payment
        return new Payment($coins);
    }

    public function outputChange(array $coins, string $choice): string {
        Drink: $acceptedChoice = $this->acceptChoice($choice);
        Payment: $acceptedPayment = $this->acceptPayment($coins);
        $change = VendingMachineLogic::calculateChange($acceptedChoice, $acceptedPayment);
        if(empty($change)) return "nochange";

        $output = array();
        foreach(array_keys($change) as $key){
            $output[] = $key;
            $output[] = $change[$key];
        }
        return implode(" ", $output);
    }
}
