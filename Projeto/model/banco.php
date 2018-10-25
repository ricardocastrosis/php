<?php
class Conexao{
    private $url = 'localhost';
    private $usuario = 'aluno';
    private $senha = 'aluno123';
    private $banco = 'loja';

    public $link;

    public function getConexao(){
        //conectar mysql;
        $link = mysqli_connect(
            $this->url,
            $this->usuario,
            $this->senha,
            $this->banco); 
        
        //configura padrão de caracteres;
        mysqli_set_charset($link, "utf8");
        
        //verifica erro de conexao
        if(mysqli_connect_errno()){
            echo 'Erro ao conectar no banco: ' 
                        .mysqli_connect_error();
        }

        return $link;
    }
}
?>