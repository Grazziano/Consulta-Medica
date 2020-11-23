<?php
include_once '../model/Conexao.class.php';
include_once '../model/Medicos.class.php';

include('../includes/navbar.php');
$medicos = new Medicos();

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
        color: #0094cf;
        font-family: 'Signika', sans-serif;
    }

    .margin {
        margin-bottom: 10px;
    }

    h4,
    h2 {
        font-family: 'Signika', sans-serif;
        /* font-size: 18px; */
        color: #0099CF;
        margin-left: 10px;
    }

    .btn-link {
        color: red;
        margin-left: 12em;
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
                <h2>TESTE</h2>

                <form action="../controller/InsertHorarioController.php" method="post">
                    <div class="form-group">
                        <label for="">Data e Hora</label>
                        <input type="text" class="form-control" placeholder="dd-mm-yyyy       hh:mm" name="dataHora" id="dataHora">
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
                        <a href="../index.php">Voltar para a página inicial</a>
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

                <div class="row">
                    <h4>16/11/2020 07:00</h4>

                    <form action="" method="post">
                        <input type="submit" class="btn btn-link" value="Remover">
                    </form>

                </div>

                <hr>

            </div>
        </div>
    </div>
</div>

<?php
include('../includes/footer.php')
?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script>
    $(document).ready(function() {
        $("#dataHora").mask("00/00/0000          00:00");
    });
</script>