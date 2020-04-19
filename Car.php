<?php

class Car
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /*
     * @var bool
     */
    private $hasParkBrake = true;

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;
    private $nbWheels;
    private $currentSpeed;
    private $nbSeats;
    private $color;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function setParkBrake(): void
    {
        if ($this->hasParkBrake == true) {
            $this->hasParkBrake = false;
        } else $this->hasParkBrake = true;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


    public function start(): void
    {
        if ($this->hasParkBrake == true) {
            throw new Exception("The brake is on!<br>");
        }
        while ($this->currentSpeed < 88) {
            $this->currentSpeed++;
        }

    }

    public function forward()
    {
        $this->currentSpeed = 88;
    }

    public function brake()
    {
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
        }
    }

    public function setNbWheels($nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

}
