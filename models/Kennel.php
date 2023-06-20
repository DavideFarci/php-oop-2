<?php

class Kennel
{
    public function __construct(
        private array $material,
        private string $dimension,
        private string $type, //interno o esterno
    ) {
    }
}
