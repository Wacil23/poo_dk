<?php
require_once('Vehicule.php');

class Car extends Vehicule
{

    private string $energy;
    private int $energyLvl;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function start(): string
    {
        return 'Start';
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLvl(): int
    {
        return $this->energyLvl;
    }
    public function setEnergyLvl(int $energyLvl): void
    {
        $this->energyLvl = $energyLvl;
    }
}
