<?php
$caminhoCss = '../../';
$caminho = '../';
include_once '../model/Conexao.class.php';
include_once '../model/Medicos.class.php';
include('../../includes/navbar.php');

$medico = new Medicos();
$id = $_GET['id_medico'];

$nome = "";

foreach($medico->getMedico("medico", $id) as $m){
$nome = $m[2];
}

?>

<link rel="stylesheet" href="../../css/form.css">

<div class="container">

    <h1>Editar médico</h1>

    <form action="../controller/EditMedicoController.php" method="POST" name="formulario">

        <div class="form-group">
            <div class="col-md-12">
                <label> Nome </label>
                <input type="text" name="nome" class="form-control" placeholder="Insira o nome do proficional" value="<?php echo $nome; ?>" required autofocus>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <label> Senha antiga </label>
                <input type="password" name="senha" class="form-control" placeholder="Insira a senha antiga" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <label> Nova Senha </label>
                <input type="password" name="newSenha" class="form-control" placeholder="Insira uma nova senha forte e segura" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12" align="center">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" value="Atualizar Cadastro" class="btn btn-primary">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12 margin" align="center">
                <a href="../../index.php">Voltar para a página inicial</a>
            </div>
        </div>

    </form>
</div>

<?php
include('../../includes/footer.php')
?>