<?php

namespace App\Card;

use App\Card\Deck;

class DeckJoker extends DeckStand
{
    public function __construct($numJokers = 2)
    {
        parent::__construct();

        for ($i = 0; $i < $numJokers; $i++) {
            $this->deck[] = new Card ('Joker', 'Joker');
        }
    }
}
