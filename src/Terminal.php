<?php
namespace Trafegus44;

/**
 * Class Terminal
 * @package Trafegus
 */
class Terminal extends Trafegus {

    private $fields = array();
    private $terminal;

    public function __construct($host, $key)
    {
        parent::__construct($host, $key);
        $this->terminal = new \stdClass();
    }

    public function setIdentificador($identificador){
        if(isset($identificador)){
            $this->terminal->identificador = $identificador;
        }
        return $this;
    }

    public function setTecnologia($tecnologia){
        if(isset($tecnologia)){
            $this->terminal->versao_tecnologia = $tecnologia;
        }
        return $this;
    }
    //OneSignal
    public function setToken($playerID){
        if(isset($playerID)){
            $this->terminal->token = $playerID;
        }
        return $this;
    }

    public function create(){
        $this->fields = $this->terminal;
        $CURL = new CURL();
        $response = $CURL->Open($this->host,$this->auth, $this->fields,'aparelho');
        return $response;
    }
}