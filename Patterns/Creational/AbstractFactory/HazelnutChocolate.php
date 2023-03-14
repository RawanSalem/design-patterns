<?php

namespace Patterns\Creational\AbstractFactory;

class HazelnutChocolate implements ChocolateInterface
{
  private $country;

  public function __construct($country)
  {
    $this->country = $country;
  }

  public function chocolateCountry(): string
  {
    return 'Made in ' . $this->country;
  }
}
