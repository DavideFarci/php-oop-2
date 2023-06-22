<?php

trait Price
{
    protected int $price;

    // GET function
    public function getPrice()
    {
        return $this->price . ' €';
    }

    public function setPrice($price)
    {
        if ($price > 0) {
            $this->price = $price;
        } else {
            throw new Exception('Prezzo <= 0');
        }
        return $this;
    }
}
