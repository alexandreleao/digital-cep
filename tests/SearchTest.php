<?php

use PHPUnit\Framework\TestCase;
use Alexandreleao\DigitalCep\Search;

class SearchTest extends TestCase{ 

    /**
     * @dataProvider dadosTeste
     */

    public function testGetAddressFromZipcodeDefaultUsage(string $input, array $esperado){

        $resultado = new Search;

        $resultado =  $resultado->getAddressFromZipcode($input);


       $this->assertEquals($esperado, $resultado);

    }

    public function dadosTeste(){
       return [
          "Endereço Praça da sé" => [
             "01001000",
             [
               "cep"=> "01001-000",
               "logradouro"=> "Praça da Sé",
               "complemento"=>"",
               "bairro"=> "Engenho Velho de Brotas",
               "localidade"=> "Salvador",
               "uf"=> "BA",
               "ibge"=> "2927408",
               "gia" => "",
               "ddd"=> "71",
               "siafi"=>"3849"
            ]
            ],
            "Endereço Qualquer"=> [
               "40243520",
               [
                  "cep"=> "40243-520",
                  "logradouro"=> "Rua José Ramos",
                  "complemento"=>"",
                  "bairro"=> "Engenho Velho de Brotas",
                  "localidade"=> "Salvador",
                  "uf"=> "BA",
                  "ibge"=> "2927408",
                  "gia" => "",
                  "ddd"=> "71",
                  "siafi"=>"3849"
               ]
            ]

       ];
         
    }

 }