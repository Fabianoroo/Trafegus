<?php
namespace Trafegus44;

trait traitParametros{

    /**
     * @param $tipoLocal
     * @return int
     */
    public function paramsTipoLocal($tipoLocal){
        if($tipoLocal){
            switch ($tipoLocal) {
                case 'PARADA':
                    return 1;
                case 'COLETA':
                    return 2;
                case 'ENTREGA':
                    return 3;
                case 'ORIGEM':
                    return 4;
                case 'DESTINO':
                    return 5;
                case 'REFEICAO':
                    return 6;
                case 'PERNOITE':
                    return 7;
                case 'PASSAGEM':
                    return 8;
                case 'ADUANA':
                    return 9;
                case 'MATRIZ':
                    return 10;
                case 'MANUTENCAO':
                    return 11;
                case 'ABASTECIMENTO':
                    return 12;
                case 'FISCALIZACAO':
                    return 13;
                case 'POLICIA':
                    return 14;
                case 'BALSA':
                    return 15;
                case 'PORTO':
                    return 16;
            }
        }
    }
}