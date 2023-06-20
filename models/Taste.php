<?php

class Taste extends Food
{
    public function __construct(
        public string $name
    ) {
    }
    public function __toString()
    {
        return $this->name;
    }
}
