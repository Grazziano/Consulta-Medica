<?php
include_once '../model/Conexao.class.php';
include_once '../model/Horario.class.php';

$horario = new Horario();

$data = $_GET;

var_dump($data);
exit;

if (isset($data) && !empty($data)) {
    $medico->getMedico("medico", $_GET['id_medico']);
    header("Location: ../view/formHorario.php");
}
// var_dump($medico);
// exit;