<?php 

namespace Patterns\Creational\AbstractFactory;

class ChocolateAbstractFactory
{
    private $country;
    
    public function __construct($country)
    {
        $this->country = $country;
    }

    public function CreateHazelnutChocolate() : HazelnutChocolate
    {
        return new HazelnutChocolate($this->country);
    }

    public function CreateCaramelChocolate(int $calories= 0) : CaramelChocolate
    {
        return new CaramelChocolate($this->country, $calories);
    }

    public function CreateDarkChocolate(int $chocolatePercent = 0) : DarkChocolate
    {
        return new DarkChocolate($this->country, $chocolatePercent);
    }
}
