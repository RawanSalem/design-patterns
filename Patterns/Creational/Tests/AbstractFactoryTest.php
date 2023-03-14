<?php

namespace Patterns\Creational\Tests;

require_once 'vendor/autoload.php';

use Faker\Factory;
use Patterns\Creational\AbstractFactory\CaramelChocolate;
use Patterns\Creational\AbstractFactory\ChocolateAbstractFactory;
use Patterns\Creational\AbstractFactory\DarkChocolate;
use Patterns\Creational\AbstractFactory\HazelnutChocolate;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    private $faker;

    public function __construct()
    {
        parent::__construct();
        $this->faker = Factory::create();
    }

    public function testGetHazelnautCocolateObject()
    {
        $country = $this->faker->country;

        $chocolateFactory = new ChocolateAbstractFactory($country);
        $hazelnutChocolate = $chocolateFactory->CreateHazelnutChocolate();

        $this->assertInstanceOf(HazelnutChocolate::class, $hazelnutChocolate, 'chocolate type is not hazelnut chocolate');
        $this->assertEquals("Made in " . $country, $hazelnutChocolate->chocolateCountry());
    }

    public function testGetCaramelCocolateObject()
    {
        $country = $this->faker->country;
        $calories = $this->faker->numberBetween(50, 250);

        $chocolateFactory = new ChocolateAbstractFactory($country);
        $caramelChocolate = $chocolateFactory->CreateCaramelChocolate($calories);

        $this->assertInstanceOf(CaramelChocolate::class, $caramelChocolate, 'chocolate type is not caramel chocolate');
        $this->assertEquals(
            "Made in " . $country . ', chocolate calories per bar: ' . $calories,
            $caramelChocolate->chocolateCountry()
        );
    }

    public function testGetDarkCocolateObject()
    {
        $country = $this->faker->country;
        $chocolatePercent = $this->faker->numberBetween(50, 100);

        $chocolateFactory = new ChocolateAbstractFactory($country);
        $darkChocolate = $chocolateFactory->CreateDarkChocolate($chocolatePercent);

        $this->assertInstanceOf(DarkChocolate::class, $darkChocolate, 'chocolate type is not dark chocolate');
        $this->assertEquals(
            "Made in " . $country . ', chocolate percent: ' . $chocolatePercent,
            $darkChocolate->chocolateCountry()
        );
    }
}
