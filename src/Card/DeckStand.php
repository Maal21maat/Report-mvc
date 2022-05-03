<?php

namespace App\Card;

use App\Card\Deck;

class DeckStand extends Deck
{
    protected $symbolCard = ['H', 'D', 'C', 'S'];
    protected $valueCard = ['2','3','4','5','6','7','8','9','10','J','Q','K','A'];

    public function __construct()
    {
        parent::__construct($this->symbolCard, $this->valueCard);
    }

}
