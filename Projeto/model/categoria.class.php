<?php

class Categoria{

    public $id;
    public $descricao;
    public $abreviatura;

    private $link;

    public function __construct($con){
        $this->link = $con;
    }

    public function salvar(){
        $sql = "INSERT INTO categoria values(null, ?,?)";

        $agente = $this->link->prepare($sql);

        $this->descricao = htmlspecialchars(strip_tags($this->descricao));
        $this->abreviatura = htmlspecialchars(strip_tags($this->abreviatura));

        $agente->bind_param("ss",$this->descricao, $this->abreviatura);
        
        $agente->execute();
    }
}

?>