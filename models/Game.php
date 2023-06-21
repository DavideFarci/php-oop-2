<?php

class Game extends Product
{
    public string $age;
    public string $dimension;
    public array $type;
    public function __construct(
        string $category,
        string $image,
        string $name,
        string $description,
        string $availability,
        int $price,
        string $age,
        string $dimension,
        array $type, //intelligenza, forza ecc
    ) {
        $this->age = $age;
        $this->dimension = $dimension;
        $this->type = $type;

        parent::__construct($category, $image, $name, $description, $availability, $price);
    }

    public function implodeArray()
    {
        $typeString = implode(', ', $this->type);
        return $typeString;
    }

    public function getCard()
    {
        $typeProduct = get_class($this);
        return "<div class=\"card\" style=\"width: 18rem;\">
        <img src=\"/img/{$this->image}\" class=\"card-img-top\" alt=\"{$this->image}\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">{$this->name}</h5>
        </div>
        <ul class=\"list-group list-group-flush\">
          <li class=\"list-group-item\">Categoria:Tipo di prodotto: {$typeProduct}</li>
          <li class=\"list-group-item\">Categoria: {$this->category}</li>
          <li class=\"list-group-item\">Prezzo: {$this->getPrice()}</li>
          <li class=\"list-group-item\">Dimensioni: {$this->dimension}</li>
          <li class=\"list-group-item\">Tipo di gioco: {$this->implodeArray()}</li>
          <li class=\"list-group-item\">Età: {$this->age}</li>
          <li class=\"list-group-item\">Dimensioni: {$this->dimension}</li>
          <li class=\"list-group-item\">Disponibilità: {$this->availability}</li>
          <li class=\"list-group-item\">Descrizione prodotto: {$this->description}</li>
        </ul>
        <div class=\"card-body\">
        <a href=\"#\" class=\"card-link\">Compra</a>
        <a href=\"#\" class=\"card-link\">Aggiungi al carrello</a>
        </div>
      </div>";
    }
}
