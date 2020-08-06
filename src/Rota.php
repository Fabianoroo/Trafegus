<?php
namespace Trafegus44;

class Rota extends Trafegus{

    private $fields = array();
    private $rota;
    private $ponto_rota;
    private $pontos_rota = array();

    use traitParametros;

    /**
     * Rota constructor.
     * Necessário informar Latitude e Longitude,
     * caso contrário informar todos os demais dados
     * para o detalhamento do logradouro.
     * @param $host
     * @param $key
     */
    public function __construct($host, $key)
    {
        parent::__construct($host, $key);
        $this->rota = new \stdClass();
        $this->ponto_rota = new \stdClass();
    }

    /**
     * @param String $descricao Descrição da Rota. String(500)
     * @return $this
     */
    public function setDescricao($descricao){
        if($descricao){
            $this->rota->descricao = $descricao;
        }
        return $this;
    }


    /**
     * @param String $descricao_local Descrição do local. String(200)
     * @return $this
     */
    public function setDescricaoLocal($descricao_local){
        if($descricao_local){
            $this->ponto_rota->descricao_local = $descricao_local;
        }
        return $this;
    }

    /**
     * @param mixed $tipo_local Tipo de Parada. Podendo ser informado o código,
     * ou também a STRING presente nos parâmetros
     * @return $this
     */
    public function setTipoLocal($tipo_local){
        if(!is_numeric($tipo_local)){
            $tipo_local = self::paramsTipoLocal($tipo_local);
        }
        if($tipo_local){
            $this->ponto_rota->tipo_local = $tipo_local;
        }
        return $this;
    }

    /**
     * @param String $latitude Latitude do local. String(15)
     * @return $this
     */
    public function setLatitude($latitude){
        if($latitude){
            $this->ponto_rota->latitude = $latitude;
        }
        return $this;
    }

    /**
     * @param  double $distancia
     * Distância da Rota (Obrigatório quando for informado Coordenadas)
     * @return $this
     */
    public function setDistancia($distancia){
        if($distancia){
            $this->ponto_rota->distancia = $distancia;
        }
        return $this;
    }

    /**
     * @param String $longitude Longitude do local. String(15)
     * @return $this
     */
    public function setLongitude($longitude){
        if($longitude){
            $this->ponto_rota->longitude = $longitude;
        }
        return $this;
    }

    /**
     * @param String $logradouro Logradouro do Local. String(200)
     * @return $this
     */
    public function setLogradouro($logradouro){
        if($logradouro){
            $this->ponto_rota->logradouro = $logradouro;
        }
        return $this;
    }

    /**
     * @param String $cep CEP do Logradouro do Local. String(8)
     * @return $this
     */
    public function setCEP($cep){
        if($cep){
            $this->ponto_rota->cep = $cep;
        }
        return $this;
    }

    /**
     * @param String $numero Número do Local. String(100)
     * @return $this
     */
    public function setNumero($numero){
        if($numero){
            $this->ponto_rota->numero = $numero;
        }
        return $this;
    }

    /**
     * @param String $bairro Bairro do Local. String(100)
     * @return $this
     */
    public function setBairro($bairro){
        if($bairro){
            $this->ponto_rota->bairro = $bairro;
        }
        return $this;
    }

    /**
     * @param String $cidade_descricao_ibge Descrição da Cidade ou Código IBGE. String(100)
     * @return $this
     */
    public function setCidadeDescricaoIBGE($cidade_descricao_ibge){
        if($cidade_descricao_ibge){
            $this->ponto_rota->cidade_descricao_ibge = $cidade_descricao_ibge;
        }
        return $this;
    }

    /**
     * @param String $sigla_estado Sigla do Estado do Logradouro. String(2)
     * @return $this
     */
    public function setSiglaEstado($sigla_estado){
        if($sigla_estado){
            $this->ponto_rota->sigla_estado = $sigla_estado;
        }
        return $this;
    }

    /**
     * @param String $pais Pais. String(50)
     * @return $this
     */
    public function setPais($pais){
        if($pais){
            $this->ponto_rota->pais = $pais;
        }
        return $this;
    }

    /**
     * @param real $raio Raio do local.
     * @return $this
     */
    public function setRaio($raio){
        if($raio){
            $this->ponto_rota->raio = $raio;
        }
        return $this;
    }

    /**
     * Adiciona um novo objeto ao array PONTOS_ROTA
     * @return $this
     */
    public function add(){
        array_push($this->pontos_rota,$this->ponto_rota) ;
        $this->ponto_rota = new \stdClass();
        return $this;
    }


    /**
     * @return JSON
     */
    public function create(){
        $this->rota->pontos_rota = $this->pontos_rota;

        $this->fields['rotas'][] = $this->rota;
        $CURL = new CURL();
        $response = $CURL->Open($this->host,$this->auth, $this->fields,'rota');
        return $response;
    }
}


