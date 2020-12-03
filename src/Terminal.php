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

    /**
     * @param $identificador String Identificador único do aparelho
     * @return $this
     */
    public function setIdentificador($identificador){
        if(isset($identificador)){
            $this->terminal->identificador = $identificador;
        }
        return $this;
    }

    /**
     * @param $versao_tecnologia String Código da versão da tecnologia
     * @return $this
     */
    public function setTecnologia($versao_tecnologia){
        if(isset($versao_tecnologia)){
            $this->terminal->versao_tecnologia = $versao_tecnologia;
        }
        return $this;
    }
    /**
     * @param $playerID String Token para envio de notificação (OneSignal)
     * @return $this
     */
    public function setToken($playerID){
        if(isset($playerID)){
            $this->terminal->token = $playerID;
        }
        return $this;
    }

    /**
     * Realiza o envio das informações para cadastro do aparelho
     * @return \stdClass
     */
    public function create(){
        $this->fields = $this->terminal;
        $CURL = new CURL();
        $response = $CURL->Open($this->host,$this->auth, $this->fields,'aparelho');
        return $response;
    }
}