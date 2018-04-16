<?php 
function listaCategorias($conexao){
    $categorias = array();
    $query = "select * from categorias";
    $resultado = mysqli_query($conexao, $query);
    while($categoria = mysqli_fetch_assoc($resultado)){
        array_push($categorias, $categoria);
    }
    return $categorias;
}

function buscarNomeCategoriaPorId($conexao, $categoria_id){
    $query = "select nome from categorias where id = {$categoria_id}";
    $resultado = mysqli_query($conexao, $query);
    $retorno = mysqli_fetch_assoc($resultado);
    return $retorno['nome'];
}
?>