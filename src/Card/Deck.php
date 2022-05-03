<?php

namespace App\Card;

use App\Card\Card;

class Deck
{
    private $deck;
    protected $symbolCard = ['H', 'D', 'C', 'S'];
    protected $valueCard = ['2','3','4','5','6','7','8','9','10','J','Q','K','A'];

    public function __construct($symbol, $value)
    {
        $this->deck[] = $this->makeDeck($symbol, $value);
    }

    public function makeDeck($symbolCard, $valueCard)
    {
        $arr = array();
        foreach ($symbolCard as $symbol) {
            foreach ($valueCard as $value) {
                $arr [] = new Card($symbol, $value);
            }
        }
        return $arr;
    }

    public function getDeck()
    {
        return $this->deck;
    }

    public function shuffleDeck() {
        shuffle($this->deck);
    }

}
