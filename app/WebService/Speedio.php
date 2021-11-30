<?php 
    namespace App\WebService;

    class Speedio {
        //  URL base da API Speedio
        const URL_BASE = 'https://api-publica.speedio.com.br';

        //  Método responsável por consultar um CNPJ nas APIs do Speedio
        public function ConsultarCNPJ($cnpj){

            // Remove os caracteres inválidos
            $cnpj = preg_replace('/\D/', '', $cnpj);

            // Retorna a execução da consulta
            return $this->get('/buscarcnpj?cnpj='.$cnpj);
        }

        // Método responsável por executar a consulta nas APIs
        public function get($resource){

            // ENDPOINT COMPLETO DA API
            $endpoint = self::URL_BASE.$resource;

            // Init Curl
            $curl = curl_init();

            // Configurações do Curl
            curl_setopt_array($curl, [
                CURLOPT_URL => $endpoint,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => 'GET'
            ]);

            // Executa a Requisição
            $response = curl_exec($curl);
            curl_close($curl);

            // Resposta em Array
            $responseArray = json_decode($response, true);

            // Se tiver dados ele executa, senão tiver retorna um array vazio
            return is_array($responseArray) ? $responseArray : [];
        }
    }
?>