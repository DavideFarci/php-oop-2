<?php

class Food extends Product
{
    public function __construct(
        private int $weight,
        private string $type, //umido secco
        private string $age,
        private array $taste,
    ) {
    }
}
