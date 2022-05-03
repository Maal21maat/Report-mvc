<?php

namespace App\Card;

class CardValue extends Card
{
    private $representation = [
        'H1',
        'H2',
        'H3',
        'H4',
        'H8',
        'H9',
        'H10',
        'H11',
        'H12',
        'H13',
        'R1',
        'R2',
        'R3',
        'R4',
        'R8',
        'R9',
        'R10',
        'R11',
        'R12',
        'R13',
        'S1',
        'S2',
        'S3',
        'S4',
        'S8',
        'S9',
        'S10',
        'S11',
        'S12',
        'S13',
        'K1',
        'K2',
        'K3',
        'K4',
        'K8',
        'K9',
        'K10',
        'K11',
        'K12',
        'K13',
    ];

    public function __construct()
    {
        parent::__construct();
    }

    public function getAsString(): string
    {
        return $this->representation[$this->value - 1];
    }
}
