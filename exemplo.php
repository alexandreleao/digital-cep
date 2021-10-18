<?php 
 
 require_once "vendor/autoload.php";

 use \alexandre\DigitalCep\Search;

 $busca = new Search;

 $resultado = $busca->getAddressFromZipcode('41330035');

 print_r($resultado);