<?php
declare (strict_types=1);

use CarRental\{Car, RentalService};

final class RentalServiceTest extends PHPUnit\Framework\TestCase
{
    public function testCostForThreeDays(): void
    {
        $service = new RentalService();
        $car = new Car('Opel Astra', 'ZZ-999-ZZ');
        $this-> assertSame(119.97, $service->rent($car, 3));
    }
}