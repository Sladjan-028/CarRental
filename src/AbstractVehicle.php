<?php
namespace CarRental;

abstract class AbstractVehicle implements Vehicle, \JsonSerializable
{
    protected string $brand;
    protected string $plateNo;

    public function __construct(string $brand, string $plateNo)
    {
        $this->brand = $brand;
        $this->plateNo = $plateNo;
    }

    public function __toString(): string
    {
        return "{$this->brand} ({$this->plateNo})";
    }

    public function jsonSerialize(): array
    {
        return [
            'brand' => $this->brand,
            'plateNo' => $this->plateNo,
            'rate' =>$this->getDailyRate()
        ];
    }
}