<?php

interface IPessoa {

    public function create($pessoa);

    public function updadte($pessoa);

    public function read($id);

    public function read_all();

    public function delete($id);

}
