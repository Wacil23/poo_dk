<?php
require_once('Vehicule.php');

class Car extends Vehicule
{

    private string $energy;
    private int $energyLvl;
    private bool $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    public function setParkBrake($hasParkBrake): void
    {
        $this->hadParkBrake = $$hasParkBrake;
    }
    public function getParkBrake(): bool
    {
        return $this->hasParkBrake;
    }
    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function start($hasParkBrake): bool
    {
        try {
            $hasParkBrake === true;

            if ($hasParkBrake === true) {
                throw new Exception('Le frein à main est activé ');
            }
        } catch (Exception $e) {
            die($e->getMessage());
        } finally {
            echo 'ma voiture roule comme un donut';
        }

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
