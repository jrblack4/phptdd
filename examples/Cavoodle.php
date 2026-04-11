<?php

namespace Animal\Dogs;

use Animal\Dog;

class Cavoodle extends Dog
{
    public function __construct()
    {
        parent::__construct();
        $this->setColor("Chocolate");
    }
}
