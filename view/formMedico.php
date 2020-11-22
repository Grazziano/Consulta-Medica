<?php
include_once '../model/Conexao.class.php';
include_once '../model/Medicos.class.php';
include('../includes/navbar.php')
?>

<style>
    .container {
        background: #ffffff;
        width: 30%;
        margin-bottom: 20px;
    }

    h1,
    label {
        color: #0094cf;
        font-family: 'Signika', sans-serif;
    }

    .margin {
        margin-bottom: 10px;
    }
</style>

<div class="container">

    <h1>Cadastro de médico</h1>

    <form action="../controller/InsertMedicoController.php" method="POST" name="formulario">

        <div class="form-group">
            <div class="col-md-12">
                <label> Nome </label>
                <input type="text" name="nome" class="form-control" placeholder="Insira o nome do proficional" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <label> E-mail </label>
                <input type="mail" name="email" class="form-control" placeholder="exemplo@dominio.com.br" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <label> Senha </label>
                <input type="password" name="senha" class="form-control" placeholder="Escolha uma senha forte e segura" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12" align="center">
                <input type="submit" value="Realizar Cadastro" class="btn btn-primary">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12 margin" align="center">
                <a href="../index.php">Voltar para a página inicial</a>
            </div>
        </div>

    </form>
</div>

<?php
include('../includes/footer.php')
?>