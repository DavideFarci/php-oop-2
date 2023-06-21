<?php

class Product
{
    public function __construct(
        public string $category, //cane gatto
        public string $image,
        public string $name,
        public string $description,
        public string $availability,
        private int $price,
    ) {
    }

    // SET function
    public function setprice($price)
    {
        $this->price = $price;
    }

    // GET function
    public function getPrice()
    {
        return $this->price . ' €';
    }
}
