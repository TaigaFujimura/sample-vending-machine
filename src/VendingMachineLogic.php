<?php

class VendingMachineLogic {
    static function calculateChange(Drink $drink, Payment $payment): array {
        //　差額
        $difference = $payment->total() - $drink->getPrice();
        print("\n差額: ".$difference."\n");
        $change = array();

        // お釣りの枚数
        if(1 <= ($difference / 1000)){
            $change['1000'] = floor($difference/1000);
            $difference = $difference % 1000;
            print("1000yen: ".$change['1000']."\n");
        }
        if(1 <= ($difference / 500)){
            $change['500'] = floor($difference/500);
            $difference = $difference % 500;
            print("500yen: ".$change['500']."\n");
        }
        if(1 <= ($difference / 100)){
            $change['100'] = floor($difference/100);
            $difference = $difference % 100;
            print("100yen: ".$change['100']."\n");
        }
        if(1 <= ($difference / 50)){
            $change['50'] = floor($difference/50);
            $difference = $difference % 50;
            print("50yen: ".$change['50']."\n");
        }
        if(1 <= ($difference / 10)){
            $change['10'] = floor($difference/10);
            $difference = $difference % 10;
            print("10yen: ".$change['10']."\n");
        }
        print("change: ".implode(" ", $change)."\n\n");
        return $change;
    }
}
