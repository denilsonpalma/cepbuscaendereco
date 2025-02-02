<?php 

require_once "vendor/autoload.php";

use \denilson\cepbuscaendereco\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('19940338');

print_r($resultado);

