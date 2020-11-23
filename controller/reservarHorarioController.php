<?php
include_once '../model/Conexao.class.php';
include_once '../model/Horario.class.php';

$horario = new Horario();

$id = $_POST['id'];

// var_dump($id);
// exit;

if (isset($id) && !empty($id)) {
    $horario->reservaHorario("horario", $id);
    header("Location: ../index.php");
}
