<?php include("cabecalho.php"); ?>
 <h1>Formulário de cadastro de usuario</h1>

<form method='POST' action="adiciona-usuario.php">
    <table class="table">
        <tr>
            <td>Usuário</td>
            <td><input class="form-control" maxlength="10" type="text" name="nome" required/></td>
        </tr>

        <tr>
            <td>Senha</td>
            <td><input class="form-control" maxlength="15" type="password" name="senha" required/></td>
        </tr>

    </table>

    <div class='text-left botaocadastra'>
            <button class="btn btn-primary " type="submit">Cadastrar</button>
    </div>

</form>

<?php include("rodape.php"); ?>
