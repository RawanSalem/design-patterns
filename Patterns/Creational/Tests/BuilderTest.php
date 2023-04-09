<?php

namespace Patterns\Tests;
use Faker\Factory;
use Patterns\Creational\Builder\CaramelChocolateBuilder;
use Patterns\Creational\Builder\ChocolateProducer;
use Patterns\Creational\Builder\DarkChocolateBuilder;
use Patterns\Creational\Builder\HazelnutChocolateBuilder;
use Patterns\Creational\Builder\Models\CaramelChocolate;
use Patterns\Creational\Builder\Models\DarkChocolate;
use Patterns\Creational\Builder\Models\HazelnutChocolate;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    private $faker;

    public function __construct()
    {
        parent::__construct();
        $this->faker = Factory::create();
    }

    public function testProduceHazelnutChocolate()
    {
        $builder = new HazelnutChocolateBuilder();
        $chocolateProducer = new ChocolateProducer($builder);
        $myChocolate = $chocolateProducer->produceChocolate();

        $this->assertInstanceOf(HazelnutChocolate::class, $myChocolate);
    }

    public function testProduceDarkChocolate()
    {
        $builder = new DarkChocolateBuilder();
        $chocolateProducer = new ChocolateProducer($builder);
        $myChocolate = $chocolateProducer->produceChocolate();
        $this->assertInstanceOf(DarkChocolate::class, $myChocolate);
    }

    public function testProduceCaramelChocolate()
    {
        $builder = new CaramelChocolateBuilder();
        $chocolateProducer = new ChocolateProducer($builder);
        $myChocolate = $chocolateProducer->produceChocolate();

        $this->assertInstanceOf(CaramelChocolate::class, $myChocolate);
    }
}