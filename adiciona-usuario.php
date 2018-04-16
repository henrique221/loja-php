<?php include("cabecalho.php"); 
include("conecta.php"); 
include("banco-produto.php");


$nome = $_POST['nome'];
$senha = $_POST['senha'];

if (cadastrarUsuario($conexao, $nome, $senha)) { 
    ?>
    <p class="text-success">O usuario <?= strip_tags($nome); ?> foi cadastrado com sucesso!</p>
    <?php 
    $pagina = "produto-lista.php"; 
    include("redirect.php");
    ?>
    
<?php 
}

else if (mysqli_errno($conexao) == 1062) {
    ?>
    <p class="text-danger">O usuario <?= strip_tags($nome); ?> ja existe</p>
    <a href="formulario-cadastro-usuario.php" class="btn btn-info">Retornar</a>
    <?php
}

else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">O usuario <?= strip_tags($nome); ?> não foi cadastrado <?= $msg ?></p>
    <a href="formulario-cadastro-usuario.php" class="btn btn-info">Retornar</a>
<?php
}

include("rodape.php"); ?>
