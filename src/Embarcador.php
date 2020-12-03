<?php
namespace Trafegus44;

use stdClass;
use Exception;

/**
 * Class Embarcador
 * @package Trafegus
 */
class Embarcador extends Trafegus {

    private $fields = array();
    private $embarcador;

    public function __construct($host, $key)
    {
        parent::__construct($host, $key);
        $this->embarcador = new stdClass();
    }
    /**
     * @param String $cnpj_embarcador CNPJ do Embarcador
     * @return $this
     */
    public function setCnpj($cnpj_embarcador){
        if(isset($cnpj_embarcador)){
            $this->embarcador->cnpj_embarcador = $cnpj_embarcador;
        }
        return $this;
    }

    /**
     * @param String $nome * CNPJ Nome do Embarcador
     * @return $this
     */
    public function setNome($nome){
        if(isset($nome)){
            $this->embarcador->nome = $nome;
        }
        return $this;
    }

    /**
     * @param String $razao_social * CNPJ Razão social do Embarcador
     * @return $this
     */
    public function setRazaoSocial($razao_social){
        if(isset($razao_social)){
            $this->embarcador->razao_social = $razao_social;
        }
        return $this;
    }

    /**
     * @param String $ie * Inscricao estadual do Embarcador
     * @return $this
     */
    public function setIE($IE){
        if(isset($IE)){
            $this->embarcador->ie = $IE;
        }
        return $this;
    }

    /**
     * @param String $logradouro * Descrição do Logradouro
     * @return $this
     */
    public function setLogradouro($logradouro){
        if(isset($logradouro)){
            $this->embarcador->logradouro = $logradouro;
        }
        return $this;
    }

    /**
     * @param String $cep * CEP do Logradouro
     * @return $this
     */
    public function setCEP($cep){
        if(isset($cep)){
            $this->embarcador->cep = $cep;
        }
        return $this;
    }

    /**
     * @param String $numero * Número do Logradouro
     * @return $this
     */
    public function setNumero($numero){
        if(isset($numero)){
            $this->embarcador->numero = $numero;
        }
        return $this;
    }

    /**
     * @param String $complemento * Descrição do Bairro do Logradouro
     * @return $this
     */
    public function setComplemento($complemento){
        if(isset($complemento)){
            $this->embarcador->complemento = $complemento;
        }
        return $this;
    }

    /**
     * @param String $bairro * Descrição do Bairro do Logradouro
     * @return $this
     */
    public function setBairro($bairro){
        if(isset($bairro)){
            $this->embarcador->bairro = $bairro;
        }
        return $this;
    }

    /**
     * @param String $cidade * Cidade da origem ou código do IBGE (conforme tabela padrão do IBGE)
     * @return $this
     */
    public function setCidade($cidade){
        if(isset($cidade)){
            $this->embarcador->cidade = $cidade;
        }
        return $this;
    }

    /**
     * @param String $cnpj_matriz * CNPJ da matriz do Embarcador
     * @return $this
     */
    public function setDocumentoMatriz($cnpj_matriz){
        if(isset($cnpj_matriz)){
            $this->embarcador->cnpj_matriz = $cnpj_matriz;
        }
        return $this;
    }

    /**
     * @param String $senha
     * @return $this
     */
    public function setSenha($senha){
        if(isset($senha)){
            $this->embarcador->senha = $senha;
        }
        return $this;
    }

    /**
     * @param String $roteiriza_automatico_sm * Utiliza roterização automática na SM (0 não, 1 sim)
     * @return $this
     */
    public function setRoteirizao($roteiriza_automatico_sm){
        if(isset($roteiriza_automatico_sm)){
            $this->embarcador->roteiriza_automatico_sm = $roteiriza_automatico_sm;
        }
        return $this;
    }

    /**
     * @param String $associa_motorista_sm * Associar motoristas automáticamente ao Transportador da SM (0 não, 1 sim).
     * @return $this
     */
    public function setAssociaMotoristaSM($associa_motorista_sm){
        if(isset($associa_motorista_sm)){
            $this->embarcador->roteiriza_automatico_sm = $associa_motorista_sm;
        }
        return $this;
    }

    /**
     * @param String $associa_veiculo_sm * Associar veiculos automáticamente ao Transportador da SM (0 não, 1 sim).
     * @return $this
     */
    public function setAssociaVeiculoSM($associa_veiculo_sm){
        if(isset($associa_veiculo_sm)){
            $this->embarcador->associa_veiculo_sm = $associa_veiculo_sm;
        }
        return $this;
    }

    /**
     * @param String $estacao_rastreamento_padrao * Estação de rastreamento do Embarcador
     * @return $this
     */
    public function setEstacaoRastreamentoPadrao($estacao_rastreamento_padrao){
        if(isset($estacao_rastreamento_padrao)){
            $this->embarcador->associa_veiculo_sm = $estacao_rastreamento_padrao;
        }
        return $this;
    }

    private static function validade($embarcador){
        try{
            if(!is_object($embarcador))
                throw new Exception('Embarcador não é um objeto');
            if(!isset($embarcador->cnpj_embarcador) || empty($embarcador->cnpj_embarcador))
                throw new Exception('cnpj_embarcador obrigatório');
            if(!isset($embarcador->nome) || empty($embarcador->nome))
                throw new Exception('Nome do embarcador obrigatório');

            return $embarcador;

        }catch (Exception $e){
            echo $e->getMessage();
        }
    }

    /**
     * @return Object
     */
    public function create(){
        $this->fields['embarcador'][] = $this->embarcador;
        $CURL = new CURL();
        $response = $CURL->Open($this->host,$this->auth, $this->fields,'embarcador');
        return $response;
    }
}