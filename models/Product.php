<?php

class Product
{
    public function __construct(
        public string $category, //cane gatto
        public string $image,
        public string $name,
        public string $descripion,
        public string $availability,
        private int $price,
    ) {
    }
}
