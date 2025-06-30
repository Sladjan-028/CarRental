<?php
namespace CarRental;

class RentalService
{
    public function rent(Vehicle $vehicle, int $days) : float
    {
        if ($days < 1)
        {
            throw new \InvalidArgumentException('Days must be >= 1');
        }

        $dailyRate = $vehicle->getDailyRate();

        if ($days >= 7)
        {
            $dailyRate *= 0.95;
        }

        return round ($dailyRate * $days, 2);
    }
}