<?php

$pagina = "home";
if(isset($_GET['p'])){
  $pagina = addslashes($_GET['p']);
}
//echo "<script>alert('$pagina')</script>";
include_once "pages/header.php";

switch($pagina){
  case 'home':
    include_once "pages/home.php"; break;
  case 'sobre':
    include_once "pages/sobre.php"; break;
  case 'produtos':
    include_once "pages/produtos.php"; break;
  case 'contato':
   include_once "pages/contato.php"; break;
  default:
    include_once "pages/home.php"; break;
}


include_once "pages/footer.php";
?>
