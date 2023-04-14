<?php

namespace Patterns\Creational\FactoryMethod;

class CustomersFactory
{    
    /**
     * GetCustomer
     *
     * @param  string $type
     * @return Customers
     */
    public function GetCustomer(string $type): Customers
    {
        if ($type == 'individual') {
            return new Individuals();
        }
        if ($type == 'organization') {
            return new Organizations();
        }
        if ($type == 'non_profit') {
            return new NonProfitOrganizations();
        }

        return null;
    }
}