<?php
include_once 'src/model/Conexao.class.php';
include_once 'src/model/Medicos.class.php';
include_once 'src/model/Horario.class.php';

$medicos = new Medicos();
$horarios = new Horario();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@600&display=swap" rel="stylesheet">
    <link href="css/containers.css" rel="stylesheet" type="text/css">
</head>

<body style="background-color: #dcdcdc;">

    <nav class="navbar">
        <div class="col-lg-12" style="text-align: right;">
            <a class="navbar-brand btn btn-light" style="color: #0094cf;" href="src/view/formMedico.php">Cadastro de médico</a>
        </div>
    </nav>

    <?php foreach ($medicos->listMedicos("medico") as $medico) : ?>
        <div class="container">
            <div class="col-md-10 offset-md-1">

                <div class="row">
                    <div class="col-md-6">
                        <h1><?php echo $medico['nome']; ?></h1>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-outline-primary btn-sm" href="src/view/editMedico.php?id_medico=<?php echo $medico['id']; ?>">Editar Cadastro</a>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-outline-primary btn-sm" href="src/view/formHorario.php?id_medico=<?php echo $medico['id']; ?>">Configurar Horários</a>
                    </div>
                </div>

                <div class="row">


                    <?php
                    foreach ($horarios->listHorarios("horario", intval($medico['id'])) as $time) :
                        if ($time['horario_agendado'] == 0) :
                    ?>
                            <div class="col-md-3">
                                <form action="src/controller/reservarHorarioController.php" method="post">
                                    <input type="hidden" name="id_horario_reservado" value="<?php echo $time['id']; ?>">
                                    <input type="submit" class="btn btn-primary btn-lg" value="<?php echo (date("d/m/Y", strtotime($time['data_horario'])) . " às " . date("H:i", strtotime($time['data_horario']))); ?>">
                                </form>
                            </div>
                    <?php
                        endif;
                    endforeach;
                    ?>

                </div>

            </div>
        </div>
    <?php endforeach; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>