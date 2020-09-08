<?php
namespace Trafegus44;

/**
 * Class Posicao
 * @package Trafegus
 */
class Posicao extends Trafegus {

    private $posicoes = array();
    private $posicao;

    public function __construct($host, $key){
        parent::__construct($host, $key);
        $this->posicao = new \stdClass();
    }

    /**
     * @param int $terminal
     * Terminal do equipamento
     * @return $this
     */
    public function setTerminal($terminal){
        if(isset($terminal)){
            $this->posicao->terminal = $terminal;
        }
        return $this;
    }

    /**
     * @param int $versao_tecnologia
     * Código da versão da tecnologia
     * @return $this
     */
    public function setVersaoTecnologia($versao_tecnologia){
        if(isset($versao_tecnologia)){
            $this->posicao->versao_tecnologia = $versao_tecnologia;
        }
        return $this;
    }

    /**
     * @param timestamp $data_computador_bordo
     * Data do computador de bordo no formato "yyyy-mm-dd hh:mm:ss"
     * @return $this
     */
    public function setDataComputadorBordo($data_computador_bordo){
        if(isset($data_computador_bordo)){
            $this->posicao->data_computador_bordo = $data_computador_bordo;
        }
        return $this;
    }

    /**
     * @param decimal $latitude
     * Latitude da posição (em formato decimal)
     * @return $this
     */
    public function setLatitude($latitude){
        if(isset($latitude)){
            $this->posicao->latitude = $latitude;
        }
        return $this;
    }

    /**
     * @param decimal $longitude
     * Longitude da posição (em formato decimal)
     * @return $this
     */
    public function setLongitude($longitude){
        if(isset($longitude)){
            $this->posicao->longitude = $longitude;
        }
        return $this;
    }

    /**
     * @param Boolean $prestor_online
     * 1 se existia conexão no momento que a posição foi gerada ou 0 caso contrário
     * @return $this
     */
    public function setPrestorOnline($prestor_online){
        if(isset($prestor_online)){
            $this->posicao->prestor_online = $prestor_online;
        }
        return $this;
    }

    /**
     * @param $velocidade
     * @return $this
     */
    public function setVelocidade($velocidade){
        if(isset($velocidade)){
            $this->posicao->velocidade = $velocidade;
        }
        return $this;
    }

    public function addPosition(){
        $this->posicao->prestor_online = 1;
        array_push($this->posicoes, $this->posicao);
        $this->posicao = new \stdClass();
        return $this;
    }


    public function create(){
        $response = false;
        if($this->posicoes){
            $CURL = new CURL();
            $response = $CURL->Open($this->host,$this->auth, $this->posicoes,'listaPosicao');
        }
        return $response;
    }

    public function debug($JSON = true){
        return $JSON ? json_encode($this->posicoes) : $this->posicoes;
    }
}