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

    //__get() é utilizado para ler dados de propriedades inacessíveis.
//    public function __get($field)
//    {
//        if (isset($this->$field))
//            return $this->$field;
//    }

}

