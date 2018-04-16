<?php 
include("cabecalho.php"); 
include("conecta.php"); 
include("banco-produto.php");
include("banco_categoria.php");
#include("captcha.php");

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = (int) $_POST["categoria_id"];
if (array_key_exists('usado', $_POST)){
    $usado = "true";
}else{
    $usado = "false";
}

$nomeCategoria = buscarNomeCategoriaPorId($conexao, $categoria_id);

#if ($resultadoCaptcha){
    if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)) { ?>
        <p class="text-success">O produto <?= strip_tags($nome); ?> de <?= $preco; ?> Reais, da categoria <?= $nomeCategoria ?> foi adicionado com sucesso!</p>
    <?php $pagina = "produto-lista.php"; 
    #include("redirect.php");
    } 
    
    else {
        $msg = mysqli_error($conexao);
    ?>
        <p class="text-danger">O produto <?=strip_tags($nome); ?> não foi adicionado <?= $msg ?></p>
    <?php
    }
   
#}
/* 
else {
    ?>
    <p class="text-danger">O produto <?= $nome; ?> não foi adicionado pois o capthca não foi completado</p>
<?php } ?>
*/
?>
<?php include("rodape.php"); ?>
