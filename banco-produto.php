
<?php

function listaProdutos($conexao) {
    $produtos = array();
    $resultado = mysqli_query($conexao, "select p.*,c.nome as categoria_nome from Produtos as p join categorias as c on c.id=p.categoria_id");

    while($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }

    return $produtos;
}

function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado) {
    $nome = mysqli_real_escape_string($conexao, $nome);
    $preco = (int) mysqli_real_escape_string($conexao, $preco);
    $descricao = mysqli_real_escape_string($conexao, $descricao);
    $categoria_id = mysqli_real_escape_string($conexao, $categoria_id);
    
    
    $query = "insert into Produtos (nome, preco, descricao, categoria_id, usado) values ('{$nome}',{$preco},'{$descricao}',{$categoria_id},{$usado});";
    return mysqli_query($conexao, $query);
}

function removeProduto($conexao, $id) {
    $id = mysqli_real_escape_string($conexao, $id);
    
    $query = "delete from Produtos where id = {$id}";
    return mysqli_query($conexao, $query);
}

function cadastrarUsuario($conexao, $nome, $senha){
    $nome = mysqli_real_escape_string($conexao, $nome);
    $senha = mysqli_real_escape_string($conexao, $senha);

    $query = "insert into usuario (nome, senha) values ('{$nome}', '{$senha}')";
    return mysqli_query($conexao, $query);
}
function selecionarProduto($conexao, $produtoId){
    $query = "select * from Produtos where id = {$produtoId}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

