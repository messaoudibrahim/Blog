<?php

namespace App;


class Config
{
    private $settings = [];

    /**
     * Config constructor.
     */
    public function __construct()
    {
        $this->settings = require dirname(__DIR__. '/config/config.php');
    }

}  