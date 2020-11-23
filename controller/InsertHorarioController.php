<?php
include_once '../model/Conexao.class.php';
include_once '../model/Horario.class.php';

$horario = new Horario();

$data = $_POST;
$data_hora = $_POST['dataHora'];
$id_medico = $_POST['id_medico'];
$novaString = str_replace(" ", "", $data_hora);
$data = substr($novaString, 0, 10);
$data = date("Y-m-d", strtotime($data));
$hora = substr($novaString, 10, 14);
// var_dump($data);
// var_dump($hora);
// exit;
$data_horario = $data . " " . $hora;

if (isset($data) && !empty($data)) {
    $horario->insertHorario($id_medico, $data_horario);
    header("Location: ../index.php?time_add_success");
}
