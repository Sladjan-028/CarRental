<?php
namespace CarRental;

class Car extends AbstractVehicle
{
    private int $doors;

    public function __construct(string $brand, string $plateNo, int $doors = 4) 
    {
        parent::__construct($brand, $plateNo);
        $this->doors = $doors;
    }

    public function getDailyRate(): float
    {
        return 39.99 + ($this->doors > 4 ? 5.0 : 0.0);
    }
}