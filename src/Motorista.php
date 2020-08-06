<?php
namespace Trafegus44;

class Motorista extends Trafegus {

    private $json = array() ;
    private $motorista;
    private $transportador;
    private $contatos;

    public function __construct($host, $key){
        parent::__construct($host, $key);
        $this->motorista = new \stdClass();
        $this->transportador = new \stdClass();
        $this->contatos = new \stdClass();
    }

    /**
     * @param String $nome Nome do Motorista. Tamanho máximo: 50
     * @return $this
     */
    public function setNome($nome)
    {
        $this->motorista->nome = $nome;
        return $this;
    }

    public function setTransportadorNome($nome)
    {
        $this->transportador->nome = $nome;
        return $this;
    }

    public function setTransportadorDocumento($documento)
    {
        $this->transportador->documento = $documento;
        return $this;
    }


    /**
     * @param String $cpf CPF do motorista. Tamanho máximo: 20
     * @return $this
     */
    public function setCpf($cpf)
    {
        $this->motorista->cpf_motorista = $cpf;
        return $this;
    }

    /**
     * @param String $rg RG do motorista. Tamanho máximo: 20
     * @return $this
     */
    public function setRg($rg)
    {
        $this->motorista->rg = $rg;
        return $this;
    }

    /**
     * @param String $logradouro Descrição do Logradouro. Tamanho máximo: 200
     * @return $this
     */
    public function setLogradouro($logradouro)
    {
        $this->motorista->logradouro = $logradouro;
        return $this;
    }

    /**
     * @param String $cep CEP do Logradouro. Tamanho máximo: 8
     * @return $this
     */
    public function setCep($cep)
    {
        $this->motorista->ce = $cep;
        return $this;
    }

    /**
     * @param String $numero Número do Logradouro. Tamanho máximo: 50
     * @return $this
     */
    public function setNumero($numero)
    {
        $this->motorista->numer = $numero;
        return $this;
    }

    /**
     * @param String $complemento Descrição do Bairro do Logradouro. Tamanho máximo: 100
     * @return $this
     */
    public function setComplemento($complemento)
    {
        $this->motorista->complement = $complemento;
        return $this;
    }

    /**
     * @param String $bairro Descrição do Bairro do Logradouro. Tamanho máximo: 100
     * @return $this
     */
    public function setBairro($bairro)
    {
        $this->motorista->bairr = $bairro;
        return $this;
    }

    /**
     * @param String $cidade Cidade da origem ou código do IBGE
     * (conforme tabela padrão do IBGE). Tamanho máximo: 100
     * @return $this
     */
    public function setCidade($cidade)
    {
        $this->motorista->cidad = $cidade;
        return $this;
    }

    /**
     * @param String $sigla_estado Sigla do Estado do Logradouro. Tamanho máximo: 2
     * @return $this
     */
    public function setSiglaEstado($sigla_estado)
    {
        $this->motorista->sigla_estad = $sigla_estado;
        return $this;
    }

    /**
     * @param String $pais Pais. Tamanho máximo: 50
     * @return $this
     */
    public function setPais($pais)
    {
        $this->motorista->pai = $pais;
        return $this;
    }

    /**
     * @param String $nro_cnh Número da CNH do motorista. Tamanho máximo: 25
     * @return $this
     */
    public function setNroCnh($nro_cnh)
    {
        $this->motorista->nro_cnh = $nro_cnh;
        return $this;
    }

    /**
     * @param String $categoria_cnh Categoria da CNH do motorista. Tamanho máximo: 10
     * @return $this
     */
    public function setCategoriaCnh($categoria_cnh)
    {
        $this->motorista->categoria_cn = $categoria_cnh;
        return $this;
    }

    /**
     * @param Date $validade_cnh Validade CNH do motorista. Ex: 01/06/2015
     * @return $this
     */
    public function setValidadeCnh($validade_cnh)
    {
        $this->motorista->validade_cnh = $validade_cnh.' 00:00:00';
        return $this;
    }

    /**
     * @param String $vigilante Vigilante (S/N). Tamanho máximo: 1
     * @return $this
     */
    public function setVigilante($vigilante)
    {
        $this->motorista->vigilante = $vigilante;
        return $this;
    }

    /**
     * @param int $nro_cnv Número CNV do motorista
     * @return $this
     */
    public function setNroCnv($nro_cnv)
    {
        $this->motorista->nro_cnh = $nro_cnv;
        return $this;
    }

    /**
     * @param Date $validade_cnv Validade CNV
     * @return $this
     */
    public function setValidadeCnv($validade_cnv)
    {
        $this->motorista->validade_cnh = $validade_cnv.' 00:00:00';
        return $this;
    }

    /**
     * @param String $estado_civil
     * @param String $parametros C: CASADO, S: SOLTEIRO, D: DIVORCIADO, V: VIUVO
     * @return $this
     */
    public function setEstadoCivil($estado_civil)
    {
        $this->motorista->estado_civi = $estado_civil;
        return $this;
    }

    /**
     * @param String $moto_registro_cnh Número de registro da CNH. Tamanho máximo: (12)
     * @return $this
     */
    public function setMotoRegistroCnh($moto_registro_cnh)
    {
        $this->motorista->moto_registro_cn = $moto_registro_cnh;
        return $this;
    }

    /**
     * @param String $moto_orgao_emissor_cnh Órgão emissor da CNH da CNH. Tamanho máximo: 10
     * @return $this
     */
    public function setMotoOrgaoEmissorCnh($moto_orgao_emissor_cnh)
    {
        $this->motorista->moto_orgao_emissor_cn = $moto_orgao_emissor_cnh;
        return $this;
    }

    /**
     * @param Date $moto_data_primeira_habilitacao Data da primeira habilitação. Ex: 01/01/2020
     * @return $this
     */
    public function setMotoDataPrimeiraHabilitacao($moto_data_primeira_habilitacao)
    {
        $this->motorista->moto_data_primeira_habilitacao = $moto_data_primeira_habilitacao.' 00:00:00';
        return $this;
    }

    /**
     * @param Date $moto_data_emissao Data de Emissão da CNH. Ex: 01/01/2020
     * @return $this
     */
    public function setMotoDataEmissao($moto_data_emissao)
    {
        $this->motorista->moto_data_emissao = $moto_data_emissao.' 00:00:00';
        return $this;
    }

    /**
     * @param Date $data_nasc Data Nascimento. Ex: 01/06/2015
     * @return $this
     */
    public function setDataNasc($data_nasc)
    {
        $this->motorista->data_nasc = $data_nasc.' 00:00:00';
        return $this;
    }

    /**
     * @param String $rg_emissor Orgao Emissor do RG. Tamanho máximo: 10
     * @return $this
     */
    public function setRgEmissor($rg_emissor)
    {
        $this->motorista->rg_emissor = $rg_emissor;
        return $this;
    }

    public function setRgUf($rg_uf)
    {
        $this->motorista->rg_uf = $rg_uf;
        return $this;
    }

    /**
     * @param String $naturalidade_descricao_ibge Cidade de Naturalidade
     * ou código do IBGE (conforme tabela padrão do IBGE). Tamanho máximo: 100
     * @return $this
     */
    public function setNaturalidadeDescricaoIbge($naturalidade_descricao_ibge)
    {
        $this->motorista->naturalidade_descricao_ibge = $naturalidade_descricao_ibge;
        return $this;
    }

    /**
     * @param String $naturalidade_uf_sigla Sigla estado naturalidade. Tamanho máximo:2
     * @return $this
     */
    public function setNaturalidadeUfSigla($naturalidade_uf_sigla)
    {
        $this->motorista->naturalidade_uf_sigla = $naturalidade_uf_sigla;
        return $this;
    }

    /**
     * @param String $cnh_seg Número seguraça CNH. Tamanho máximo: 11
     * @return $this
     */
    public function setCnhSeg($cnh_seg)
    {
        $this->motorista->cnh_seg = $cnh_seg;
        return $this;
    }

    /**
     * @param String $cnh_uf Sigla estado emissor CNH. Tamanho máximo: 2
     * @return $this
     */
    public function setCnhUf($cnh_uf)
    {
        $this->motorista->cnh_uf = $cnh_uf;
        return $this;
    }

    /**
     * @param String $nome_mae Nome da Mãe. Tamanho máximo: 100
     * @return $this
     */
    public function setNomeMae($nome_mae)
    {
        $this->motorista->nome_mae = $nome_mae;
        return $this;
    }

    /**
     * @param String $nome_pai Nome do Pai. Tamanho máximo: 100
     * @return $this
     */
    public function setNomePai($nome_pai)
    {
        $this->motorista->nome_pai = $nome_pai;
        return $this;
    }

    /**
     * @param String $documento_transportador CPF/CNPJ do transportador. Tamanho máximo: 30
     * @return $this
     */
    public function setDocumentoTransportador($documento_transportador)
    {
        $this->transportador->documento_transportador = $documento_transportador;
        return $this;
    }

    /**
     * @param int $vinculo_contratual
     * @param int $Parametros Tipo de vínculo com o Transportador.
     * 1=Fixo;
     * 2=Agregado;
     * 3=Terceiro;
     * @return $this
     */
    public function setVinculoContratual($vinculo_contratual)
    {
        $this->transportador->vinculo_contratual = $vinculo_contratual;
        return $this;
    }

    /**
     * @param String $fone Contato Motorista.
     * @return $this
     */
    public function setFoneContatos($fone)
    {
        $this->contatos->fone1 = $fone;
        $this->contatos->email = 'email';
        $this->contatos->texto = 'texto';
        return $this;
    }

    /**
     * @param String $texto Nome do contato
     * @return $this
     */
    public function setTextoContatos($nome)
    {
        $this->contatos->texto = $nome;
        return $this;
    }

    public function setEmailContatos($email)
    {
        $this->contatos->texto = $email;
        return $this;
    }

    public function debugJSON(){
        $debug = array();
        $motorista = $this->motorista;
        (!empty((array)$this->contatos)) ? $motorista->contatos[] = $this->contatos : NULL;
        (!empty((array)$this->transportador)) ? $motorista->transportador[] = $this->transportador : NULL ;
        $debug['motorista'][] = $motorista;
        return $debug;
    }

    public function create($registerLog = false){
        (!empty((array)$this->contatos)) ? $this->motorista->contatos[] = $this->contatos : NULL;
        (!empty((array)$this->transportador)) ? $this->motorista->transportador[] = $this->transportador : NULL;
        $this->json['motorista'][] = $this->motorista;

        $CURL = new CURL();
        $response = $CURL->Open($this->host,$this->auth, $this->json,'motorista');
//        $registerLog ? self::registerLog(json_encode($this->json),json_encode($response),'Motorista') : NULL;
        return $response;
    }

    public function debug(){
        $this->json['motorista'][] = $this->motorista;
        return $this->json;
    }
}