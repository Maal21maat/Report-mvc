<?php

namespace App\Card;

class Card
{
    protected $symbol;
    protected $value;

    public function __construct($symbol, $value)
    {
        $this->symbol = $symbol;
        $this->value = $value;
    }

    public function getSymbol()
    {
        return $this->symbol;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getCard()
    {
        return array('symbol' => $this->symbol, 'value' => $this->value);
    }
}

