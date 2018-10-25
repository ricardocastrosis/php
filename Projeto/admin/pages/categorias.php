<?php
require_once "../../model/banco.php";
require_once "../../model/categoria.class.php";

include_once "header.php";

if($_POST){
    $bd = new Conexao();
    $link = $bd->getConexao();

    $cat = new Categoria($link);
    $cat->descricao = $_POST['descricao'];
    $cat->abreviatura = $_POST['abreviatura'];

    $cat->salvar();
}


?>
<div class="container">
    <form method="post">
        <div class="form-group">
            <div class="form-row">
            <div class="col-md-6">
                <div class="form-label-group">
                <input name="descricao" type="text" id="firstName" class="form-control" placeholder="Descrição" required="required" autofocus="autofocus">
                <label for="firstName">Descrição</label>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-label-group">
                <input name="abreviatura" type="text" id="lastName" class="form-control" placeholder="Abreviatura" required="required">
                <label for="lastName">Abreviatura</label>
                </div>
            </div>
            </div>

            <button class="btn btn-primary">Salvar</button>
        </div>
            
    </form>
</div>
<?php
include_once "footer.php";
?>