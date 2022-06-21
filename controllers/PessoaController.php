<?php
    // require_once './Pessoa_Fisica';
    // require_once './Pessoa_Juridica';

    // $pessoa_fisica = new Pessoa_Fisica();
    // $pessoa_fisica->id = 1;
    // $pessoa_fisica->CPF = "01299237029";
    // $pessoa_fisica->RG = "5099009531";
    // $pessoa_fisica->PIS = "020397804231";
    // $pessoa_fisica->gender = "MALE";
    // $pessoa_fisica->marital_status = "SINGLE";
    // $pessoa_fisica->born = "30/03/1990";
    // $pessoa_fisica->profession = "PROGRAMADOR";
    // $pessoa_fisica->schooling = "PÓS GRADUAÇÃO";

    // $pessoa_juridica = new Pessoa_Juridica();
    // $pessoa_juridica->id = 2;
    // $pessoa_juridica->CNPJ = "08199996006230";
    // $pessoa_juridica->fundation = "01/10/2022";
    // $pessoa_juridica->CNAE = "159753";

    // $pessoa = new Pessoa();
    // $pessoa->create($pessoa_fisica);
    // $pessoa->create($pessoa_juridica);

    // echo "oooopppaaa";

    $idPessoa = $_REQUEST["id"] ?? 0;

    $dadosPessoa = 
        [
            [
                "id" => 10,
                "name" => "Aviaozinho",
                "status" => "Ativo",
                "email" => "aviaozinho@curso.com",
                "phone" => "54 912345678",
                "gender" => "M",
                "type" => "CPF",
                "cep" => "95707110",
            ],
            [
                "id" => 50,
                "name" => "Aviaozinhoxxxx",
                "status" => "Ativo",
                "email" => "aviaozinhoxxx@curso.com",
                "phone" => "54 912345678",
                "gender" => "M",
                "type" => "CPF",
                "cep" => "95707110",
            ]
    ];

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($dadosPessoa);
    exit();
