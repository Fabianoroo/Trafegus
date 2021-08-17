<?php

namespace Trafegus44;

/**
 * Class Rastreamento
 * @package Trafegus
 */
class Rastreamento extends Trafegus
{
    private $posicoes = array();

    public function __construct($host, $key)
    {
        parent::__construct($host, $key);
    }

    /**
     * @param String $doc CNPJ do transportador/embarcador.
     * Retorna últimas posições dos veículos durante as viagens em andamento
     * @return \stdClass
     */
    public function getRastreamento($doc)
    {
        if (isset($doc)) {
            $CURL = new CURL();
            $response = $CURL->Open($this->host, $this->auth, NULL, "ultima-posicao-viagem?documento={$doc}", 'GET');
            return $response;
        }
    }
}