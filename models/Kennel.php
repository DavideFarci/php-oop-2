<?php

class Kennel extends Product
{
    public function __construct(
        private array $material,
        private string $dimension,
        private string $type, //interno o esterno
    ) {
    }
}
