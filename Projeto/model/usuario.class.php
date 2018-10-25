<?php
class Usuario{

    public $id;
    public $nome;
    public $email;
    public $senha;

    private $link;

    public function __construct($con){
        $this->link = $con;
    }

    public function salvar(){
        $sql = "INSERT INTO usuario VALUES(null,?,?,?)";

        $agente = $this->link->prepare($sql);

        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->senha = htmlspecialchars(strip_tags($this->senha));

        $agente->bind_param("sss",
                    $this->nome,
                    $this->email,
                    $this->senha);
        
        $agente->execute();
    }

    public function login($email, $senha){
        $sql = "SELECT * FROM usuario WHERE email like ? AND senha like ?";

       
        $agente = $this->link->prepare($sql);
        
        $agente->bind_param("ss",
                    $email,
                    $senha);
                   
        $agente->execute();

        $result = $agente->get_result();

        
        if($result->num_rows > 0){
            $agente->close();
            return true;
        }
        $agente->close();
        return false;

    }
}
?>