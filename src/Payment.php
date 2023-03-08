<?php
class Payment {
    private int $num_1000yen_bill;
    private int $num_500yen_coin;
    private int $num_100yen_coin;
    private int $num_50yen_coin;
    private int $num_10yen_coin;

    public function __construct(array $coins){
        $this->num_1000yen_bill = array_key_exists('1000', $coins) ? $coins['1000'] : 0;
        $this->num_500yen_coin = array_key_exists('500', $coins) ? $coins['500'] : 0;
        $this->num_100yen_coin = array_key_exists('100', $coins) ? $coins['100'] : 0;
        $this->num_50yen_coin = array_key_exists('50', $coins) ? $coins['50'] : 0;
        $this->num_10yen_coin = array_key_exists('10', $coins) ? $coins['10'] : 0;
    }

    public function total(): int{
        $total = 0;

        return 1000 * $this->num_1000yen_bill + 500 * $this->num_500yen_coin + 100 * $this->num_100yen_coin + 50 * $this->num_50yen_coin + 10 * $this->num_10yen_coin;
    }
}
