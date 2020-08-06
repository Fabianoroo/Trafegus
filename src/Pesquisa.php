<?php
namespace Trafegus44;

/**
 * Class Pesquisa
 * @package Trafegus44
 */
class Pesquisa extends Trafegus {

    private $json = array();
    private $pesquisa;

    public function __construct($host, $key)
    {
        parent::__construct($host, $key);
        $this->pesquisa = new \stdClass();
    }

    /**
     * @param $tipoObjeto
     * String(2) Tipo de Objeto de Pesquisa (disponível na documentação no Tipo de Objeto de Pesquisa).
     * @return $this
     */
    public function setTipoObjeto($tipoObjeto){
        if($tipoObjeto){
            $this->pesquisa->TipoObjeto = $tipoObjeto;
        }
        return $this;
    }

    /**
     * @param $documento
     * String Documento do Transportador proprietário da pesquisa
     * @return $this
     */
    public function setDocumento($documento){
        if($documento){
            $this->pesquisa->Documento = $documento;
        }
        return $this;
    }

    /**
     * @param $objeto
     * String Objeto da pesquisa (Placa/CPF/CNPJ)
     * @return $this
     */
    public function setObjeto($objeto){
        if($objeto){
            $this->pesquisa->Objeto = $objeto;
        }
        return $this;
    }

    /**
     * @param $status
     * String(2) Status da pesquisa (disponível na documentação da Trafegus, no Status de Pesquisa)
     * @return $this
     */
    public function setStatus($status){
        if($status){
            $this->pesquisa->Status = $status;
        }
        return $this;
    }

    /**
     * @param $tipoValidade
     * String(2) Tipo de validade da pesquisa por data ou viagem, constantes "DT" ou "VI".
     * @return $this
     */
    public function setTipoValidade($tipoValidade){
        if($tipoValidade){
            $this->pesquisa->TipoValidade = $tipoValidade;
        }
        return $this;
    }

    /**
     * @param $fornecedorPesquisa
     * INT Fornecedor de Pesquisa (disponível na documentação no Fornecedor de Pesquisa).
     * @return $this
     */
    public function setFornecedorPesquisa($fornecedorPesquisa){
        if($fornecedorPesquisa){
            $this->pesquisa->FornecedorPesquisa = $fornecedorPesquisa;
        }
        return $this;
    }

    /**
     * @param $NumeroLiberacao
     * String(50) Descrição do Número da pesquisa
     * @return $this
     */
    public function setNumeroLiberacao($NumeroLiberacao){
        if($NumeroLiberacao){
            $this->pesquisa->NumeroLiberacao = $NumeroLiberacao;
        }
        return $this;
    }

    /**
     * @param $DataValidade
     * datetime (2018-10-02 11:34:29) - Data de validade da pesquisa
     * @return $this
     */
    public function setDataValidade($DataValidade){
        if($DataValidade){
            $this->pesquisa->DataValidade = $DataValidade;
        }
        return $this;
    }


    public function create(){
            $this->json['pesquisas'][] = $this->pesquisa;
            $CURL = new CURL();
            $response = $CURL->Open($this->host,$this->auth, $this->json,'historico-pesquisa');
            return $response;
    }

    public function debug(){
            $this->json['pesquisas'][] = $this->pesquisa;
            return $this->json;
    }
}