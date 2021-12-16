<?php
namespace Trafegus44;

/**
 * Class Veiculo
 * @package Trafegus
 */
class Veiculo extends Trafegus {

    private $fields = array();
    private $veiculo;

    public function __construct($host, $key)
    {
        parent::__construct($host, $key);
        $this->veiculo = new \stdClass();
    }

    public function setPlaca($placa){
        if(isset($placa)){
            $this->veiculo->placa = $placa;
        }
        return $this;
    }

    public function setRenavam($renavam){
        if(isset($renavam)){
            $this->veiculo->renavam = $renavam;
        }
        return $this;
    }

    public function setChassi($chassi){
        if(isset($chassi)){
            $this->veiculo->chassi = $chassi;
        }
        return $this;
    }

    public function setTipoVeiculo($tipo_veiculo){
        if(isset($tipo_veiculo)){
            $this->veiculo->tipo_veiculo = $tipo_veiculo;
        }
        return $this;
    }

    public function setModelo($modelo){
        if(isset($modelo)){
            $this->veiculo->modelo = $modelo;
        }
        return $this;
    }

    public function setAnoFabricacao($ano_fabricacao){
        if(isset($ano_fabricacao)){
            $this->veiculo->ano_fabricacao = $ano_fabricacao;
        }
        return $this;
    }

    public function setCor($cor){
        if(isset($cor)){
            $this->veiculo->cor = $cor;
        }
        return $this;
    }

    public function setMarca($marca){
        if(isset($marca)){
            $this->veiculo->marca = $marca;
        }
        return $this;
    }

    public function setProprietario($proprietario) {
        if(isset($proprietario)) {
            $this->veiculo->documento_proprietario = $proprietario;
        }
        return $this;
    }

    public function create(){
        $this->fields['veiculo'][] = $this->veiculo;
        $CURL = new CURL();
        $response = $CURL->Open($this->host,$this->auth, $this->fields,'veiculo');
        return $response;
    }

    public function getVeiculo($placa){
        if(isset($placa) || is_string($placa)){
            $CURL = new CURL();
            $response = $CURL->Open($this->host,$this->auth, null,"veiculo/{$placa}",'GET');
            return $response;
        }
    }
}