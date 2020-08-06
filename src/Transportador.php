<?php
namespace Trafegus44;

/**
 * Class Transportador
 * @package Trafegus
 */
class Transportador extends Trafegus {

    /**
     * @var array
     */
    private $fields ;
    private $transportador;

    /**
     * Transportador constructor.
     */
    public function __construct($host, $key)
    {
        parent::__construct($host, $key);
    }


    /**
     * @param String $documento CPJ ou CNPJ do Transportador. Tamanho máximo: 30
     * @return $this
     */
    public function setDocumento($documento){
        if(isset($documento)){
            $this->fields['documento_transportador'] = $documento;
        }
        return $this;
    }


    /**
     * @param String $nome Nome do Transportador. Tamanho máximo: 50
     * @return $this
     */
    public function setNome( $nome){
        if (isset($nome)){
            $this->fields['nome'] = $nome;
        }
        return $this;
    }

    /**
     * @param String $razao_social
     * @return $this
     */
    public function setRazaoSocial($razao_social){
        if (isset($razao_social)){
            $this->fields['razao_social'] = $razao_social;
        }
        return $this;
    }

    /**
     * @param String $ie_rg
     * @return $this
     */
    public function setIe_rg($ie_rg){
        if(isset($ie_rg)){
            $this->fields['ie_rg'] = $ie_rg;
        }
        return $this;
    }

    /**
     * @param String  $logradouro Tamanho máximo: 200
     * @return $this
     */
    public function setLogradouro($logradouro){
        if(isset($logradouro)){
            $this->fields['logradouro'] = $logradouro;
        }
        return $this;
    }

    /**
     * @param String $cep CEP do Logradouro. Tamanho máximo: 8
     * @return $this
     */
    public function setCep($cep){
        if(isset($cep)){
            $this->fields['cep'] = $cep;
        }
        return $this;
    }

    /**
     * @param String $numero Número do Logradouro. Tamanho máximo: 50
     * @return $this
     */
    public function setNumero($numero){
        if(isset($cep)){
            $this->fields['numero'] = $numero;
        }
        return $this;
    }

    /**
     * @param String $complemento Descrição do Bairro do Logradouro. Tamanho máximo: 100
     * @return $this
     */
    public function setComplemento($complemento){
        if(isset($complemento)){
            $this->fields['complemento'] = $complemento;
        }
        return $this;
    }

    /**
     * @param String $bairro Descrição do Bairro do Logradouro. Tamanho máximo: 100
     * @return $this
     */
    public function setBairro($bairro){
        if(isset($bairro)){
            $this->fields['bairro'] = $bairro;
        }
        return $this;
    }

    /**
     * @param String $cidade Cidade da origem ou código do IBGE (conforme tabela padrão do IBGE). Tamanho máximo: 100
     * @return $this
     */
    public function setCidade($cidade){
        if(isset($cidade)){
            $this->fields['cidade'] = $cidade;
        }
        return $this;
    }

    /**
     * @param String $sigla_estado Sigla do Estado do Logradouro. Tamanho máximo: 2
     * @return $this
     */
    public function setSiglaEstado($sigla_estado){
        if(isset($sigla_estado)){
            $this->fields['sigla_estado'] = $sigla_estado;
        }
        return $this;
    }

    /**
     * @param String $pais Pais. Tamanho máximo: 50
     * @return $this
     */
    public function setPais($pais){
        if(isset($pais)){
            $this->fields['pais'] = $pais;
        }
        return $this;
    }

    /**
     * @param String $documento_matriz CNPJ/CPF da matriz do Transportador. Tamanho máximo: 30
     * @return $this
     */
    public function setDocumentoMatriz($documento_matriz){
        if(isset($documento_matriz)){
            $this->fields['documento_matriz'] = $documento_matriz;
        }
        return $this;
    }

    /**
     * @param String $senha Senha do transportador. Tamanho máximo: 20
     * @return $this
     */
    public function setSenha($senha){
        if(isset($senha)){
            $this->fields['senha'] = $senha;
        }
        return $this;
    }

    /**
     * @param int $roteiriza_automatico_sm Utiliza roterização automática na SM (0 não, 1 sim)
     * @return $this
     */
    public function setRoteirizaAutomaticoSm($roteiriza_automatico_sm){
        if(isset($roteiriza_automatico_sm)){
            $this->fields['roteiriza_automatico_sm'] = $roteiriza_automatico_sm;
        }
        return $this;
    }

    /**
     * @param int $associa_motorista_sm Associar motoristas automáticamente ao Transportador da SM (0 não, 1 sim). Informar "1" por padrão
     * @return $this
     */
    public function setAssociaMotoristaSm($associa_motorista_sm){
        if(isset($associa_motorista_sm)){
            $this->fields['associa_motorista_sm'] = $associa_motorista_sm;
        }
        return $this;
    }

    /**
     * @param int $associa_veiculo_sm Associar veiculos automáticamente ao Transportador da SM (0 não, 1 sim). Informar "1" por padrão.
     * @return $this
     */
    public function setAssociaVeiculoSm($associa_veiculo_sm){
        if(isset($associa_veiculo_sm)){
            $this->fields['associa_veiculo_sm'] = $associa_veiculo_sm;
        }
        return $this;
    }

    /**
     * @param String $fone1 Telefone do contato. Tamanho máximo: 30
     * @param String $email Email do contato. Tamanho máximo: 100
     * @param String $texto Nome do contato. Tamanho máximo: 100
     * @return $this
     */
    public function setContatos($fone1, $email, $texto){
        if(isset($fone1) && isset($email) && $texto){
            $contato['fone1'] = $fone1;
            $contato['email'] = $email;
            $contato['texto'] = $texto;

            $this->fields['contatos'][] = $contato;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function create(){
        $this->transportador['transportador'][] = $this->fields;

        $CURL = new CURL();
        $response = $CURL->Open($this->host,$this->auth, $this->transportador,'transportador');
        return $response;
    }

    public function debug(){
        $this->transportador['transportador'][] = $this->fields;
        return $this->transportador;
    }

    public static function getTransportador($documentoTransportador, $host, $auth){
        if(isset($documentoTransportador)){
            $documentoTransportador = str_replace("/", "", str_replace(".", "", str_replace("-", "", str_replace(" ", "", trim($documentoTransportador)))));
            $CURL = new CURL();
            $response = $CURL->Open($host,$auth, NULL,"transportador/{$documentoTransportador}",'GET');
            return $response;
        }
    }
}