<?php
namespace Trafegus44;

/**
 * Class Trafegus
 * @package Trafegus
 */
abstract class Trafegus{

    protected $host;
    protected $auth;

    /**
     * @param $host String Host API Trafegus
     * @param $key String user and password
     */
    function __construct($host, $key){
        $this->host = $host;
        $this->auth = $key;
    }
}

