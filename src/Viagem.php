<?php
namespace Trafegus44;

/**
 * Class Viagem
 * @package Trafegus
 */
class Viagem extends Trafegus {

    private $fields = array();

    private $viagem;
    private $veiculos;
    private $motoristas;
    private $terminal;
    private $origem;
    private $destino;
    private $locais = array();
    private $local;
    private $conhecimentos = array();

    public function __construct($host, $key)
    {
        parent::__construct($host, $key);
        $this->viagem = new \stdClass();
        $this->veiculos = new \stdClass();
        $this->motoristas = new \stdClass();
        $this->terminal = new \stdClass();
        $this->conhecimentos = new \stdClass();
        $this->origem = new \stdClass();
        $this->destino = new \stdClass();
        $this->local = new \stdClass();
    }

    /**
     * @param int $tipoTransporte Tipo de Transporte
     * Parametros => 1 => TRANSFERENCIA, 2 => DISTRIBUICAO, 3 => MATERIA PRIMA, 4 MISTA
     * 5 => RETORNO, 6 => NACIONAL, 7 => EXPORTACAO, 8 => IMPORTACAO, 9 => CIRCUITO
     * @return $this
     */
    public function setTipoDeTransporte($tipoTransporte){
        if(isset($tipoTransporte)){
            $this->viagem->viag_ttra_codigo = $tipoTransporte;
        }
        return $this;
    }

    /**
     * @param int $viag_pgpg_codigo PGR para controle da viagem.
     * @return $this
     */
    public function setCodigPGR($viag_pgpg_codigo){
        if(isset($viag_pgpg_codigo)){
            $this->viagem->viag_pgpg_codigo = $viag_pgpg_codigo;
        }
        return $this;
    }

    /**
     * @param String $vlco_numero Número do conhecimento.
     * @return $this
     */
    public function setNumeroConhecimento($vlco_numero){
        if(isset($vlco_numero)){
            $this->conhecimentos->vlco_numero = $vlco_numero;
        }
        return $this;
    }

    /**
     * @param float $vlco_valor Valor do conhecimento.
     * @return $this
     */
    public function setValorConhecimento($vlco_valor){
        if(isset($vlco_valor)){
            $this->conhecimentos->vlco_valor = $vlco_valor;
        }
        return $this;
    }

    /**
     * @param int $viag_codigo_externo Código da viagem do cliente
     * @return $this
     */
    public function setCodigoViagemExterno($viag_codigo_externo){
        if(isset($viag_codigo_externo)){
            $this->viagem->viag_codigo_externo = $viag_codigo_externo;
        }
        return $this;
    }


    /**
     * @param String $documento CNPJ / CPF do Transportador da carga. Tamanho máximo: 30
     * @return $this
     */
    public function setDocumentoTransportador($documento_transportador){
        if(isset($documento_transportador)){
            $this->viagem->documento_transportador = $documento_transportador;
        }
        return $this;
    }

    /**
     * @param String $placa Placa dos veículos da viagem. Tamanho máximo: 10
     * @return $this
     */
    public function setVeiculosPlaca($placa){
        if(isset($placa)){
            $this->veiculos->placa = $placa;
        }
        return $this;
    }

    /**
     * @param String $cpf CPF do motorista da viagem. Tamanho máximo: 20
     * @return $this
     */
    public function setMotoristasCPF($cpf){
        if(isset($cpf)){
            $this->motoristas->cpf_moto = $cpf;
        }
        return $this;
    }

    public function setCodigoRota($rota_codigo){
        if(isset($rota_codigo)){
            $this->viagem->rota_codigo = $rota_codigo;
        }
        return $this;
    }



    /**
     * @param String $term_numero_terminal Descrição do local de origem. String(200)
     * @return $this
     */
    public function setOrigemDescricaoLocal($vloc_descricao){
        if(isset($vloc_descricao)){
            $this->origem->vloc_descricao = $vloc_descricao;
        }
        return $this;
    }

    /**
     * @param String $refe_latitude Latitude da origem
     * @return $this
     */
    public function setOrigemRefeLatitude($refe_latitude){
        if(isset($refe_latitude)){
            $this->origem->refe_latitude = $refe_latitude;
        }
        return $this;
    }

    /**
     * @param String $refe_longitude Longitude da Origem
     * @return $this
     */
    public function setOrigemRefeLongitude($refe_longitude){
        if(isset($refe_longitude)){
            $this->origem->refe_longitude = $refe_longitude;
        }
        return $this;
    }

    /**
     * @param String $vloc_descricao Descrição do local de destino. String(200)
     * @return $this
     */
    public function setDestinoDescricaoLocal($vloc_descricao){
        if(isset($vloc_descricao)){
            $this->destino->vloc_descricao = $vloc_descricao;
        }
        return $this;
    }


    /**
     * @param String $refe_latitude Latitude do destino.
     * @return $this
     */
    public function setDestinoRefeLatitude($refe_latitude){
        if(isset($refe_latitude)){
            $this->destino->refe_latitude = $refe_latitude;
        }
        return $this;
    }


    /**
     * @param String $refe_longitude Longitude do destino
     * @return $this
     */
    public function setDestinoRefeLongitude($refe_longitude){
        if(isset($refe_longitude)){
            $this->destino->refe_longitude = $refe_longitude;
        }
        return $this;
    }

    /**
     * @param String $vloc_descricao Descrição do local. String(200)
     * @return $this
     */
    public function setLocalDescricaoLocal($vloc_descricao){
        if(isset($vloc_descricao)){
            $this->local->vloc_descricao = $vloc_descricao;
        }
        return $this;
    }

    /**
     * @param String $logradouro Logradouro da origem String(200)
     * @return $this
     */
    public function setLocalLogradouro($logradouro){
        if(isset($logradouro)){
            $this->local->logradouro = $logradouro;
        }
        return $this;
    }

    public function setTerminalNumero($term_numero_terminal){
        if(isset($term_numero_terminal)){
            $this->terminal->term_numero_terminal = $term_numero_terminal;
        }
        return $this;
    }

    public function setTerminalTecnologia($tecn_tecnologia){
        if(isset($tecn_tecnologia)){
            $this->terminal->tecn_tecnologia = $tecn_tecnologia;
        }
        return $this;
    }

    public function setPrevisaoInicio($viag_previsao_inicio){
        if(isset($viag_previsao_inicio)){
            $this->viagem->viag_previsao_inicio = $viag_previsao_inicio;
        }
        return $this;
    }

    public function setPrevisaoFim($viag_previsao_fim){
        if(isset($viag_previsao_fim)){
            $this->viagem->viag_previsao_fim = $viag_previsao_fim;
        }
        return $this;
    }

    public function setValorTotalCarga($viag_valor_carga){
        if(isset($viag_valor_carga)){
            $this->viagem->viag_valor_carga = $viag_valor_carga;
        }
        return $this;
    }

    public function add(){
        array_push($this->locais, $this->local);
        $this->local = new \stdClass();
        return $this;
    }

    public function debugJSON(){
        $debug = array();
//        $motorista = $this->motorista;
//        (!empty((array)$this->contatos)) ? $motorista->contatos[] = $this->contatos : NULL;
//        (!empty((array)$this->transportador)) ? $motorista->transportador[] = $this->transportador : NULL ;
//        $debug['motorista'][] = $motorista;


        $this->viagem->veiculos[] = $this->veiculos;
        $this->viagem->motoristas[] = $this->motoristas;
        (!empty((array)$this->terminal)) ? $this->viagem->terminais[] = $this->terminal : NULL;

        $debug['viagem'][] = $this->viagem;

        return $debug;
    }

    public function create(){

        try{
            $this->viagem->veiculos[] = $this->veiculos;
            $this->viagem->motoristas[] = $this->motoristas;
            (!empty((array)$this->terminal)) ? $this->viagem->terminais[] = $this->terminal : NULL;

            $this->fields['viagem'][] = $this->viagem;
            $CURL = new CURL();
            $response = $CURL->Open($this->host,$this->auth, $this->fields,'viagem');
            return $response;
        }catch (\Exception $e){
            throw $e;
        }

    }

    public function update($viagemID){
        if(isset($viagemID)){
            $this->viagem->veiculos[] = $this->veiculos;
            $this->viagem->motoristas[] = $this->motoristas;
            (!empty((array)$this->terminal)) ? $this->viagem->terminais[] = $this->terminal : NULL;

            $this->fields['viagem'][] = $this->viagem;
            $CURL = new CURL();
            $response = $CURL->Open($this->host,$this->auth, $this->fields,"viagem/{$viagemID}",'PUT');
            return $response;
        }
    }

    /**
     * @param $viagemID

     */

    /**
     * @param $viagemID String Código da viagem
     * @return \stdClass
     * @throws \Exception
     */
    public function getViagem($viagemID){
        if(isset($viagemID)){
            $CURL = new CURL();
            return $response = $CURL->Open($this->host,$this->auth, null,"viagem/{$viagemID}",'GET');
        }
    }

    /**
     * @param $viagemID String Para consultar um pacote de viagens adicione o ultimo código recebico UltCodigo
     * @return \stdClass
     * @throws \Exception
     */
    public function getViagens($viagemID){
        if(isset($viagemID)){
            $CURL = new CURL();
            return $response = $CURL->Open($this->host,$this->auth, null,"viagem?UltCodigo={$viagemID}",'GET');
        }
    }
}