<?php

class Type extends Game
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
