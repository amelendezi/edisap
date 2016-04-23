<?php

namespace server\repository\models;

use server\repository\Storable as Storable;

/**
 * Description of building
 *
 * @author amelendezi
 */
class Building extends Storable{
    
    public $name;
    
    function __construct($name) {
        $this->instanceId = uniqid();
        $this->name = $name;
    }
}
