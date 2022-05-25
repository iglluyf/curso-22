<?php

class Pessoa implements IPessoa{
    
    public $id = 0;
    public $name = "";
    public $CEP = 0;
    public $mail = "";
    public $phone = 0;
    public $socialweb = "";
    public $status = true;

    public function create($pessoa){

        // $sql = "Insert into {$pessoa->id}";
        // mysqli_query($sql);
        
    }

    public function updadte($pessoa){

    }

    public function read($id){

    }

    public function read_all(){

    }

    public function delete($id){

    }
    
}