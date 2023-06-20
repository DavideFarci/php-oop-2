<?php

class Material extends Kennel
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
