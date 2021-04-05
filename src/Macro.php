<?php
namespace Trafegus44;

/**
 * Class Macro
 * @package Trafegus
 */
class Macro extends Trafegus {

    private $macro;

    public function __construct($host, $key)
    {
        parent::__construct($host, $key);
        $this->macro = new \stdClass();
    }

    /**
     * @param $numero String Número da macro
     * @return $this
     */
    public function setNumero($numero){
        if(isset($numero)){
            $this->macro->numero = $numero;
        }
        return $this;
    }

    /**
     * @param $texto String Texto da macro
     * @return $this
     */
    public function setTexto($texto){
        if(isset($texto)){
            $this->macro->texto = $texto;
        }
        return $this;
    }

    /**
     * @param $texto String Número do terminal de origem
     * @return $this
     */
    public function setNumeroTerminal($numero_terminal){
        if(isset($numero_terminal)){
            $this->macro->numero_terminal = $numero_terminal;
        }
        return $this;
    }

    /**
     * @param $versao_tecnologia String Código da versão da tecnologia do terminal de origem
     * @return $this
     */
    public function setVersaoTecnologia($versao_tecnologia){
        if(isset($versao_tecnologia)){
            $this->macro->versao_tecnologia = $versao_tecnologia;
        }
        return $this;
    }

    /**
     * @param $data_computador_bordo String  Data do computador de bordo no formato "yyyy-mm-dd hh:mm:ss"
     * @return $this
     */
    public function setDataComputadorBordo($data_computador_bordo){
        if(isset($data_computador_bordo)){
            $this->macro->data_computador_bordo = $data_computador_bordo;
        }
        return $this;
    }

    /**
     * @param $latitude String  Latitude da macro (em formato decimal)
     * @return $this
     */
    public function setLatitude($latitude){
        if(isset($latitude)){
            $this->macro->latitude = $latitude;
        }
        return $this;
    }

    /**
     * @param $longitude String  Longitude da macro (em formato decimal)
     * @return $this
     */
    public function setLongitude($longitude){
        if(isset($longitude)){
            $this->macro->longitude = $longitude;
        }
        return $this;
    }

    /**
     * @param $prestor_online Int  1 se o terminal estava conctado ao servidor no momento que a macro foi enviada, 0 caso contrário
     * @return $this
     */
    public function setPrestorOnline(int $prestor_online = 1){
        if(isset($prestor_online)){
            $this->macro->prestor_online = $prestor_online;
        }
        return $this;
    }

    public function create(){
        $CURL = new CURL();
        $response = $CURL->Open($this->host,$this->auth, $this->macro,'macro');
        return $response;
    }
}