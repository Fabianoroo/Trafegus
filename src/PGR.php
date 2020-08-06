<?php
namespace Trafegus44;

/**
 * Class Terminal
 * @package Trafegus
 */
class PGR extends Trafegus {

    private $fields = array();
    private $pgr;
    private $versoe;
    private $versoes;

    public function __construct($host, $key)
    {
        parent::__construct($host, $key);
        $this->pgr = new \stdClass();
        $this->versoe = new \stdClass();
        $this->versoes = new \stdClass();

    }

    /**
     * @param String $descricao Descrição do PGR. String(100)
     * return $this
     */
    public function setDescricao($descricao){
        if(isset($descricao)){
            $this->pgr->descricao = $descricao;
        }
        return $this;
    }

    /**
     * @param int $pgr_padrao PGR padrão a ser utilizado como modelo para
     * que as configurações de detalhes e ações sejam clonadas
     * @return $this
     */
    public function setPgrPadrao($pgr_padrao){
        if(isset($pgr_padrao)){
            $this->pgr->pgr_padrao = $pgr_padrao;
        }
        return $this;
    }

    /**
     * @param real $valor_minimo Valor Minímo do PGR.
     * @return $this
     */
    public function setValorMinimo($valor_minimo){
        if(isset($valor_minimo)){
            $this->pgr->valor_minimo = $valor_minimo;
        }
        return $this;
    }

    /**
     * @param real $valor_maximo_especifico Valor máximo específico do PGR.
     * @return $this
     */
    public function setValorMaximoEspecifico($valor_maximo_especifico){
        if(isset($valor_maximo_especifico)){
            $this->pgr->valor_maximo_especifico = $valor_maximo_especifico;
        }
        return $this;
    }

    /**
     * @param real $valor_total Valor máximo Total do PGR.
     * @return $this
     */
    public function setValorTotal($valor_total){
        if(isset($valor_total)){
            $this->pgr->valor_total = $valor_total;
        }
        return $this;
    }

    /**
     * Parametros =>
     * 1 = Muito Alto; 2 = Alto;
     * 3 = Médio; 4 = Baixo; 5 = Irrelevante
     * @param int $grau_risco
     * @return $this
     */
    public function setGrauRisco($grau_risco){
        if(isset($grau_risco) && is_numeric($grau_risco)){
            $this->pgr->grau_risco = $grau_risco;
        }
        return $this;
    }

    /**
     * @param int $codigo_versao_tecnologia Versão de tecnologia de acordo com
     * método BuscarVersoesTecnologia
     * @return $this
     */
    public function setCodigoVersaoTecnologia($codigo_versao_tecnologia){
        if(isset($codigo_versao_tecnologia)){
            $this->versoe->codigo_versao_tecnologia = $codigo_versao_tecnologia;
        }
        return $this;
    }

    public function create(){
        (!empty((array)$this->versoe)) ? $this->pgr->versoes[] = $this->versoe : NULL;
        $this->fields['pgr'][] = $this->pgr;
        $CURL = new CURL();
        $response = $CURL->Open($this->host,$this->auth, $this->fields,'pgr');
        return $response;
    }

    public function getPGR($codigo){
        if(isset($codigo)){
            $CURL = new CURL();
            $response = $CURL->Open($this->host,$this->auth, $codigo,"pgr/{$codigo}",'GET');
            return $response;
        }
    }

    public function getPGREmpresa($documentoTransportador){
        if(isset($documentoTransportador)){
            $CURL = new CURL();
            $response = $CURL->Open($this->host,$this->auth, NULL,"pgr?UltCodigo=1&Documento={$documentoTransportador}",'GET');
            return $response;
        }
    }
}