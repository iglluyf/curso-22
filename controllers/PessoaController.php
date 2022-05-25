<?php
    $pessoa_fisica = new Pessoa_Fisica();
    $pessoa_fisica->id = 1;
    $pessoa_fisica->CPF = "01299237029";
    $pessoa_fisica->RG = "5099009531";
    $pessoa_fisica->PIS = "020397804231";
    $pessoa_fisica->gender = "MALE";
    $pessoa_fisica->marital_status = "SINGLE";
    $pessoa_fisica->born = "30/03/1990";
    $pessoa_fisica->profession = "PROGRAMADOR";
    $pessoa_fisica->schooling = "PÓS GRADUAÇÃO";

    $pessoa_juridica = new Pessoa_Juridica();
    $pessoa_juridica->id = 2;
    $pessoa_juridica->CNPJ = "08199996006230";
    $pessoa_juridica->fundation = "01/10/2022";
    $pessoa_juridica->CNAE = "159753";

    $pessoa = new Pessoa();
    $pessoa->create($pessoa_fisica);
    $pessoa->create($pessoa_juridica);

