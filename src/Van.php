<?php
namespace CarRental;

class Van extends AbstractVehicle
{
    private int $capacityKg;

    public function __construct(string $brand, string $plateNo, int $capacityKg = 1000)
    {
        parent::__construct($brand, $plateNo);
        $this->capacityKg = $capacityKg;
    }

    public function getDailyRate(): float
    {
        $extraUnits = max(0, ($this->capacityKg - 1000)/500);
        return 49.99 + ($extraUnits * 5.0);
    }
}