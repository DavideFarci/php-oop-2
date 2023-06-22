<?php
include_once __DIR__ . '/../traits/Price.php';


class Product
{
    use Price;

    public function __construct(
        public string $category, //cane gatto
        public string $image,
        public string $name,
        public string $description,
        public string $availability,
        int $price,
    ) {
        $this->setPrice($price);
    }
}
