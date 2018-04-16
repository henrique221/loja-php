<?php include("cabecalho.php"); 
include("conecta.php");
include("banco_categoria.php");
$categorias = listaCategorias($conexao);
?>

<h1>Formulário de cadastro</h1>
<form method='POST' action="adiciona-produto.php">
    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" required/></td>
        </tr>

        <tr>
            <td>Preço</td>
            <td><input class="form-control" type="number" name="preco" required/></td>
        </tr>

        <tr>
            <td>Descrição</td>
            <td><textarea class="form-control" name="descricao"></textarea></td>
            
        </tr>
        <td>
            <input type="checkbox" name="usado" value="true"> Usado
        </td>
        </tr>

        <tr>
            <td>Categoria</td>
            <td>
                <select required class='form-control' name='categoria_id'>
                <option value="">---------</option>
                <?php foreach($categorias as $categoria) : ?>
                <option value="<?= (int) $categoria['id']?>">
                    <?=$categoria['nome']?>
                </option>
                <?php endforeach ?>
                </select>
            </td>   
        </tr>
    </table>

    <div class='text-left botaocadastra'>
            <button class="btn btn-primary " type="submit">Cadastrar</button>
    </div>
<!--  
    <div class="g-recaptcha" data-sitekey="6LdjvFAUAAAAAAr913wphRH0ZivBk1jQ8T2vdzeO"></div>
</form>
-->

<?php include("rodape.php"); ?>
