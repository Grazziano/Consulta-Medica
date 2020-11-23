<?php
include_once 'model/Conexao.class.php';
include_once 'model/Medicos.class.php';

$medicos = new Medicos();
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
</head>

<body style="background-color: #dcdcdc;">

    <nav class="navbar">
        <div class="col-lg-12" style="text-align: right;">
            <a class="navbar-brand btn btn-light" href="view/formMedico.php">Cadastro de médico</a>
        </div>
    </nav>
    <style>
        .container {
            background: #ffffff;
            width: 50%;
            margin-bottom: 20px;
        }

        .container .row h1 {
            font-family: 'Signika', sans-serif;
            font-size: 20px;
            color: #0094cf;
            margin-top: 10px;
        }

        .text-light {
            font-family: 'Signika', sans-serif;
            text-align: center;
            font-size: 9px;
            background: #0094cf;
        }

        .btn-outline-primary {
            font-size: 12px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
    <?php foreach ($medicos->listMedicos("medico") as $medico) : ?>
        <div class="container">
            <div class="col-md-10 offset-md-1">

                <div class="row">
                    <div class="col-md-6">
                        <h1><?php echo $medico['nome']; ?></h1>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-outline-primary btn-sm" href="view/editMedico.php?id_medico=<?php echo $medico['id']; ?>">Editar Cadastro</a>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-outline-primary btn-sm" href="view/formHorario.php?id_medico=<?php echo $medico['id']; ?>">Configurar Horários</a>
                        <!-- <a class="btn btn-outline-primary btn-sm" href="controller/ListHorarioController.php?id_medico=<?php echo $medico['id']; ?>">Configurar Horários</a> -->
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-3">
                        <div class="alert alert-primary text-light" role="alert">
                            16/11/2020 às 07:00
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="alert alert-primary text-light" role="alert">
                            16/11/2020 às 07:00
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="alert alert-primary text-light" role="alert">
                            16/11/2020 às 07:00
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="alert alert-primary text-light" role="alert">
                            16/11/2020 às 07:00
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-3">
                        <div class="alert alert-primary text-light" role="alert">
                            16/11/2020 às 07:00
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="alert alert-primary text-light" role="alert">
                            16/11/2020 às 07:00
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="alert alert-primary text-light" role="alert">
                            16/11/2020 às 07:00
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="alert alert-primary text-light" role="alert">
                            16/11/2020 às 07:00
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-3">
                        <div class="alert alert-primary text-light" role="alert">
                            16/11/2020 às 07:00
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="alert alert-primary text-light" role="alert">
                            16/11/2020 às 07:00
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="alert alert-primary text-light" role="alert">
                            16/11/2020 às 07:00
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="alert alert-primary text-light" role="alert">
                            16/11/2020 às 07:00
                        </div>
                    </div>

                </div>

            </div>
        </div>
    <?php endforeach; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>