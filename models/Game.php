<?php

class Game
{
    public function __construct(
        private string $age,
        private string $dimension,
        private array $type, //intelligenza, forza ecc
    ) {
    }
}
