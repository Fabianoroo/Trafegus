<?php
namespace Trafegus44;

/**
 * Class Trafegus
 * @package Trafegus
 */
abstract class Trafegus{

    protected $host;
    protected $auth;

    function __construct($host, $key){
        $this->host = $host;
        $this->auth = $key;
    }
}

