<?php

namespace Patterns\Creational\AbstractFactory;


class CaramelChocolate implements ChocolateInterface
{
    private $country;
    private $calories;

    public function __construct($country, $calories)
    {
        $this->country = $country;
        $this->calories = $calories;
    }


    public function chocolateCountry(): string
    {
        return 'Made in ' . $this->country . ', chocolate calories per bar: ' . $this->calories;
    }
}