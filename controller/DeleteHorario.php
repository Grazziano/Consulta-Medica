<?php
include_once '../model/Conexao.class.php';
include_once '../model/Horario.class.php';

$horario = new Horario();

$id_horario = intval($_POST['id_horario']);
// echo($id_horario);
// exit;

if (isset($id_horario) && !empty($id_horario)) {
    $horario->deleteHorario($id_horario);
    header("Location: ../index.php?delete_success");
}
