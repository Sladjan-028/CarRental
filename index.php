<?php
require __DIR__ . '/vendor/autoload.php';

use CarRental\{Car, Van, RentalService};

$service = new RentalService();

$vehicles = [
    new Car('Toyota Yaris', 'AA-123-BB'),
    new Van('Mercedes Sprinter', 'BB-456-CC', 1500)
];

foreach ($vehicles as $v)
{
    $cost = $service->rent($v, 3);
    echo $v, " -> \${$cost}\n";
}