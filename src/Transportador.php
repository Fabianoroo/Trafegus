<?php
namespace Trafegus44;

use stdClass;
/**
 * Class Transportador
 * @package Trafegus
 */
class Transportador extends Trafegus
{

    private $transportador;
    private $transportadores;

    public function __construct($host, $key)
    {
        parent::__construct($host, $key);
        $this->transportador = new stdClass();
    }

    /**
     * @param String $documento_transportador CPF / CNPJ do transportador (Obrigatório Sim)
     * @return $this
     */
    public function setDocumento(string $documento_transportador): Transportador
    {
        if (isset($documento_transportador))
            $this->transportador->documento_transportador = $documento_transportador;
        return $this;
    }

    /**
     * @param String $nome Nome do Transportador (Obrigatório Sim)
     * @return $this
     */
    public function setNome(string $nome): Transportador
    {
        if (isset($nome)) {
            $this->transportador->nome = $nome;
        }
        return $this;
    }

    /**
     * @param String $razao_social Razão social do Transportador (Obrigatório Não)
     * @return $this
     */
    public function setRazaoSocial(string $razao_social): Transportador
    {
        if (isset($razao_social)) {
            $this->transportador->razao_social = $razao_social;
        }
        return $this;
    }

    /**
     * @param String $ie_rg RG ou IE (Obrigatório Não)
     * @return $this
     */
    public function setIE_RG(string $ie_rg): Transportador
    {
        if (isset($ie_rg)) {
            $this->transportador->ie_rg = $ie_rg;
        }
        return $this;
    }

    /**
     * @param String $logradouro Descrição do Logradouro
     * @return $this
     */
    public function setLogradouro(string $logradouro): Transportador
    {
        if (isset($logradouro)) {
            $this->transportador->logradouro = $logradouro;
        }
        return $this;
    }

    /**
     * @param String $cep CEP do Logradouro (Obrigatório Não)
     * @return $this
     */
    public function setCep(string $cep): Transportador
    {
        if (isset($cep)) {
            $this->transportador->cep = $cep;
        }
        return $this;
    }

    /**
     * @param String $numero Número do Logradouro (Obrigatório Não)
     * @return $this
     */
    public function setNumero(string $numero): Transportador
    {
        if (isset($numero)) {
            $this->transportador->numero = $numero;
        }
        return $this;
    }

    /**
     * @param String $complemento Complemento do Logradouro (Obrigatório Não)
     * @return $this
     */
    public function setComplemento(string $complemento): Transportador
    {
        if (isset($complemento)) {
            $this->transportador->complemento = $complemento;
        }
        return $this;
    }

    /**
     * @param String $bairro Descrição do Bairro do Logradouro (Obrigatório Não)
     * @return $this
     */
    public function setBairro(string $bairro): Transportador
    {
        if (isset($bairro)) {
            $this->transportador->bairro = $bairro;
        }
        return $this;
    }

    /**
     * @param String $cidade Cidade da origem ou código do IBGE (conforme tabela padrão do IBGE) (Obrigatório Não)
     * @return $this
     */
    public function setCidade(string $cidade): Transportador
    {
        if (isset($cidade)) {
            $this->transportador->cidade = $cidade;
        }
        return $this;
    }

    /**
     * @param String $sigla_estado Sigla do Estado do Logradouro (Obrigatório Não)
     * @return $this
     */
    public function setSiglaEstado(string $sigla_estado): Transportador
    {
        if (isset($sigla_estado)) {
            $this->transportador->sigla_estado = $sigla_estado;
        }
        return $this;
    }

    /**
     * @param String $pais Pais (Obrigatório Não)
     * @return $this
     */
    public function setPais(string $pais): Transportador
    {
        if (isset($pais)) {
            $this->transportador->pais = $pais;
        }
        return $this;
    }

    /**
     * @param String $documento_matriz CNPJ/CPF da matriz do Transportador (Obrigatório Não)
     * @return $this
     */
    public function setDocumentoMatriz(string $documento_matriz): Transportador
    {
        if (isset($documento_matriz)) {
            $this->transportador->documento_matriz = $documento_matriz;
        }
        return $this;
    }

    /**
     * @param String $senha Senha do transportador (Obrigatório Não)
     * @return $this
     */
    public function setSenha(string $senha): Transportador
    {
        if (isset($senha)) {
            $this->transportador->senha = $senha;
        }
        return $this;
    }

    /**
     * @param Int $roteiriza_automatico_sm Utiliza roterização automática na SM (0 não, 1 sim) (Obrigatório Não)
     * @return $this
     */
    public function setRoteirizaAutomatico_sm(Int $roteiriza_automatico_sm): Transportador
    {
        if (isset($roteiriza_automatico_sm)) {
            $this->transportador->roteiriza_automatico_sm = $roteiriza_automatico_sm;
        }
        return $this;
    }

    /**
     * @param int $associa_motorista_sm Associar motoristas automáticamente ao Transportador da SM (0 não, 1 sim).
     * Informar "1" por padrão. (Obrigatório Não)
     * @return $this
     */
    public function setAssociaMotorista_sm(int $associa_motorista_sm = 1): Transportador
    {
        if (isset($associa_motorista_sm)) {
            $this->transportador->associa_motorista_sm = $associa_motorista_sm;
        }
        return $this;
    }

    /**
     * @param int $associa_veiculo_sm Associar veiculos automáticamente ao Transportador da SM (0 não, 1 sim).
     * Informar "1" por padrão.(Obrigatório Não)
     * @return $this
     */
    public function setAssociaVeiculoSM(int $associa_veiculo_sm = 1): Transportador
    {
        if (isset($associa_veiculo_sm)) {
            $this->transportador->associa_veiculo_sm = $associa_veiculo_sm;
        }
        return $this;
    }

    /**
     * @param Int $estacao_rastreamento_padrao Estação de rastreamento do transportador (Obrigatório Não)
     * @return $this
     */
    public function setEstacaoRastreamentoPadrao(int $estacao_rastreamento_padrao): Transportador
    {
        if (isset($estacao_rastreamento_padrao)) {
            $this->transportador->estacao_rastreamento_padrao = $estacao_rastreamento_padrao;
        }
        return $this;
    }

    public function add(){
        if(!$this->transportadores)
            $this->transportadores['transportador'] = array();

        array_push($this->transportadores['transportador'], $this->transportador);
        $this->transportador = new stdClass();
        return $this;
    }

    /**
     * Realiza o envio das informações para cadastro do Transportador
     * @return \stdClass
     */
    public function create(){
        $CURL = new CURL();
        $response = $CURL->Open($this->host,$this->auth, $this->transportadores,'transportador');
        return $response;
    }
}