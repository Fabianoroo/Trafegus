<?php
namespace Trafegus44;

use Exception;
use stdClass;

class CURL{

    public function __construct(){
    }

    public function Open($host, $key, $data, $endpoint, $metho = 'POST'){
        try{
            $urlBase = $host;
            $host = $host.$endpoint;
            $auth = $key;

            $json = null;
            $json = json_encode($data);
            //Open connection
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, $host);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json; charset=utf-8',
                    'Authorization: Basic ' . base64_encode("$auth")
                )
            );

            if ($metho == 'POST') {
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, ($json));
            }else if ($metho == 'PUT'){
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
                curl_setopt($ch, CURLOPT_POSTFIELDS, ($json));
            }
//            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

//            ======================= DEBUG =============================
//            if(curl_exec($ch) === false)
//            {
//                echo 'Curl error: ' . curl_error($ch);
//            }
//            else
//            {
//                echo 'Operation completed without any errors';
//            }
//            ===========================================================


            $result = curl_exec($ch);
            $response = json_decode($result);
            //Log para Adianti

            $retorno = new stdClass;
            $retorno->request = json_encode($data);
            $retorno->response = $response;
            $retorno->endpoint = $endpoint;
            $retorno->metho = $metho;
            $retorno->urlBase = $urlBase;
            $retorno->urlBase = $urlBase;

            //Closing connection
            curl_close($ch);
            return $retorno;

        }catch (Exception $e){
            throw $e;
        }
    }

}