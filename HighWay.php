<?php
abstract class HighWay
{
    private array $currentVehicles;
    private int $nbLane;
    private int $maxSpeed;

    public function setCurrentVehicles($currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }
    public function setNbLane($nbLane): void
    {
        $this->nbLane = $nbLane;
    }
    public function getnbLane(): int
    {
        return $this->nbLane;
    }
    public function setMaxSpeed($maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }
    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }
    abstract function addVehicule($vehicles);
}

final class MotorWay extends HighWay
{
    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }
    public function addVehicule($vehicles)
    {
        if ($vehicles instanceof Bicycle) {
            echo 'véhicule non autorisé';
        } else {
            $this->currentVehicles[] = $vehicles;
        }
    }
}

final class PedestrianWay extends HighWay
{
    public function __contruct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }
    public function addVehicule($vehicles)
    {
        if (($vehicles instanceof Bicycle)) {
            $this->currentVehicles[] = $vehicles;
        } else {

            echo 'véhicule non autorisé';
        }
    }
}
final class ResidentalWay extends HighWay
{
    public function __contruct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }
    public function addVehicule($vehicles)
    {
        $this->currentVehicles[] = $vehicles;
    }
}
