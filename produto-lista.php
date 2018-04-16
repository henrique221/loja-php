<?php 
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");
$produtos = listaProdutos($conexao);

if(!$produtos){
    ?>
    <h1 class='text-danger'>Não existem produtos cadastrados</h1>
<?php
}
else{?>

<h1>Lista de produtos cadastrados</h1>
<br/>

<table class='table table-striped table-bordered text-center'>
    <tr>
        <th class="text-center">Nome</th>
        <th class="text-center">Preço</th>
        <th class="text-center">Categoria</th>
        <th class="text-center">Descrição</th>
        <th class="text-center">Opções</th>
    </tr>
    <?php
    
    foreach($produtos as $produto) {?>

        <tr>
            <td><?= strip_tags($produto['nome']) ?></td>
            <td><?= strip_tags($produto['preco']) ?></td>
            <td><?= strip_tags($produto['categoria_nome']) ?></td>
            <td><?= strip_tags(substr($produto['descricao'],0,20)) ?></td>
            <td>
                <form method='POST' action='remove-produto.php'>
                <button name="produtoId" value=<?=$produto['id']?> class="btn btn-danger">
                    <i class="far fa-trash-alt"></i></button>
                </a>
                <a href="#" class="btn btn-info">
                    <i class="far fa-edit"></i>
                </a>
                </form>
            </td>
        </tr>

    <?php
    }
 } ?>

<?php include("rodape.php"); ?>