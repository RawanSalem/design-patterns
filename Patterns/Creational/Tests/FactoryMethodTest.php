<?php

namespace Patterns\Creational\FactoryMethod;

use Faker\Factory;
use Patterns\Creational\FactoryMethod\CustomersFactory;
use Patterns\Creational\FactoryMethod\Individuals;
use Patterns\Creational\FactoryMethod\NonProfitOrganizations;
use Patterns\Creational\FactoryMethod\Organizations;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testGetIndividualCustomerType()
    {
        $customer = new CustomersFactory();
        $newCustomer = $customer->GetCustomer('individual');

        $total = $newCustomer->getDiscountTotal(100);

        $this->assertInstanceOf(Individuals::class, $newCustomer);
        $this->assertEquals(90, $total);
    }

    public function testGetOrganizationCustomerType()
    {
        $customer = new CustomersFactory();
        $newCustomer = $customer->GetCustomer('organization');

        $total = $newCustomer->getDiscountTotal(100);

        $this->assertInstanceOf(Organizations::class, $newCustomer);
        $this->assertEquals(75, $total);

    }

    public function testGetNonProfitCustomerType()
    {
        $customer = new CustomersFactory();
        $newCustomer = $customer->GetCustomer('non_profit');

        $total = $newCustomer->getDiscountTotal(100);

        $this->assertInstanceOf(NonProfitOrganizations::class, $newCustomer);
        $this->assertEquals(25, $total);

    }
}