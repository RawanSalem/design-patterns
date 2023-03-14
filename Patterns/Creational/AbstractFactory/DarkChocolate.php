<?php

namespace Patterns\Creational\AbstractFactory;

class DarkChocolate implements ChocolateInterface
{
    private $country;
    private $chocolatePercent;

    public function __construct($country, $chocolatePercent)
    {
        $this->country          = $country;
        $this->chocolatePercent = $chocolatePercent;
    }

    public function chocolateCountry(): string
    {
        return 'Made in ' . $this->country . ', chocolate percent: ' . $this->chocolatePercent;
    }
}
