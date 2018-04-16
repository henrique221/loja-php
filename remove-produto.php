<?php include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");

$produtoId = (int) $_POST['produtoId'];

$produto = selecionarProduto($conexao, $produtoId);

removeProduto($conexao, $produtoId);
?>

<p class="text-success">Produto <?=$produto['nome']?> removido</p>
<br/>
<?php
$pagina = "produto-lista.php"; 
    include("redirect.php");?>