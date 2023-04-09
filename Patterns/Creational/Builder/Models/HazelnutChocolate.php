<?php

namespace Patterns\Creational\Builder\Models;

class HazelnutChocolate extends Chocolate
{
    /**
     * @var array
     */
    private $data = [];

    /**
     * set hazelnut chocolate 
     *
     * @param  mixed $name
     * @param  mixed $value
     * @return void
     */
    public function setPart($name, $value)
    {
        $this->data['name'] = $value;
    }
}

?>