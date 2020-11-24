<?php
$caminhoCss = '../../';
$caminho = '../';
include_once '../model/Conexao.class.php';
include_once '../model/Medicos.class.php';
include_once '../model/Horario.class.php';

include('../../includes/navbar.php');
$medicos = new Medicos();
$horarios = new Horario();

$id = $_GET['id_medico'];

?>

<style>
    .container {
        background: #ffffff;
        width: 40%;
        margin-bottom: 20px;
    }

    h1,
    label {
        color: #004768;
        font-family: 'Signika', sans-serif;
    }

    .margin {
        margin-bottom: 10px;
    }

    h4,
    h2 {
        font-family: 'Signika', sans-serif;
        /* font-size: 18px; */
        color: #004768;
        margin-left: 10px;
    }

    .btn-link {
        color: red;
        margin-left: 390%;
    }

    .btn-lg {
        margin-top: 10px;
    }
</style>

<div class="parent-container d-flex">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Adicionar horários</h1>

                <h4>Nome:</h4>
                <h2><?php echo "Teste"; ?></h2>

                <form action="../controller/InsertHorarioController.php" method="post">
                    <div class="form-group">
                        <label for="">Data e Hora</label>
                        <input type="text" class="form-control" placeholder="dd-mm-yyyy       hh:mm" name="dataHora" id="dataHora" required autofocus>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12" align="center">
                            <input type="hidden" name="id_medico" value="<?php echo $_GET['id_medico']; ?>">
                            <input type="submit" value="Adicionar horário" class="btn btn-primary btn-lg">
                        </div>
                    </div>
                </form>

                <div class="form-group">
                    <div class="col-md-12 margin" align="center">
                        <a href="../../index.php">Voltar para a página inicial</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Horários configurados</h1>
                <br>

                <?php foreach ($horarios->listHorarios("horario", $id) as $horario) : ?>
                    <div class="row">

                        <h4 style="font-size: 18px;"><?php echo date("d/m/Y H:i", strtotime($horario['data_horario'])); ?></h4>

                        <?php if ($horario['horario_agendado'] == 0) : ?>
                            <form action="../controller/DeleteHorario.php" method="post">
                                <input type="hidden" name="id_horario" value="<?php echo $horario["id"]; ?>">
                                <input type="submit" class="btn btn-link" onclick="return confirm('Tem certeza que deseja deletar este registro?')" value="Remover">
                            </form>
                        <?php endif; ?>

                    </div>
                    <hr>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>

<?php
include('../../includes/footer.php')
?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script>
    $(document).ready(function() {
        $("#dataHora").mask("00/00/0000          00:00");
    });
</script>