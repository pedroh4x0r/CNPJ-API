<?php 

require __DIR__.'/vendor/autoload.php';

use \App\WebService\Speedio;

// Nova instância do Speedio
$obSpeedio = new Speedio;

// Passa o CNPJ para a function de Consulta 
$resultado = $obSpeedio->ConsultarCNPJ('00.000.000/0001-91');


// Verifica o erro da requisição
if(isset($resultado['error'])){
    die($resultado['error']);
}

echo "\nRazão Social: ".$resultado['RAZAO SOCIAL']."\n";
echo "Nome Fantasia: ".$resultado['NOME FANTASIA']."\n";
echo "CNPJ: ".$resultado['CNPJ']."\n";
echo "Status: ".$resultado['STATUS']."\n";
echo "CNAE Principal Descrição: ".$resultado['CNAE PRINCIPAL DESCRICAO']."\n";
echo "CNAE Principal Código: ".$resultado['CNAE PRINCIPAL CODIGO']."\n";
echo "CEP: ".$resultado['CEP']."\n";
echo "Data de Abertura: ".$resultado['DATA ABERTURA']."\n";
echo "DDD: ".$resultado['DDD']."\n";
echo "Telefone: ".$resultado['TELEFONE']."\n";
echo "Email: ".$resultado['EMAIL']."\n";
echo "Tipo Logradouro: ".$resultado['TIPO LOGRADOURO']."\n";
echo "Logradouro: ".$resultado['LOGRADOURO']."\n";
echo "Número: ".$resultado['NUMERO']."\n";
echo "Complemento: ".$resultado['COMPLEMENTO']."\n";
echo "Bairro: ".$resultado['BAIRRO']."\n";
echo "Município: ".$resultado['MUNICIPIO']."\n";
echo "UF: ".$resultado['UF']."\n\n";

?>