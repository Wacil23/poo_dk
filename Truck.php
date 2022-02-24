<?php
require_once('Vehicule.php');

class Truck extends Vehicule
{
    private int $capacity;
    private int $stock = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->capacity = $capacity;
    }
    public function setCapacity($capacity): string
    {
        return 'la capacity de stockage est de ' . $this->setCapacity($capacity);
    }
    public function getCapacity(): int
    {
        return $this->capacity;
    }
    public function setStock($stock): void
    {
        $this->stock = $stock;
    }
    public function in_filling(): string
    {
        if (($this->stock) == $this->capacity) 
        {
            return 'full, tu peux prendre la route :)';
        } 
        elseif (($this->stock) >= 1 && ($this->stock) < 100) 
        {
            return 'La réserve est de ' . $this->stock;
        }
        elseif(($this->stock) > 100)
        {
            return "Attention la capacité de stockage est depassé de " . ($this->stock-$this->capacity) . " paquets";
        }
         else{
            return 'La reserve est vide';
        }
    }
}
