<?php
require_once('vehicule.php');
require_once('Lightable.php');

class Bicycle extends Vehicule implements LightableIterface
{
    public function switchOn(): bool
    {
        if($this->currentSpeed>10)
        {
            return true;
        }
        return false;
    }
    public function switchOff(): bool
    {
        return false;
    }
}
