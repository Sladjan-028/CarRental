<?php
namespace CarRental;

interface Vehicle
{
    public function getDailyRate(): float;
    public function __toString(): string;
}