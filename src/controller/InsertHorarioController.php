<?php
include_once '../model/Conexao.class.php';
include_once '../model/Horario.class.php';

$horario = new Horario();

$data = $_POST;
$data_hora = $_POST['dataHora'];
$id_medico = $_POST['id_medico'];
$novaString = str_replace(" ", "", $data_hora);

$dia = substr($novaString, 0, 2);
$mes = substr($novaString, 3, -10);
$ano = substr($novaString, 6, -5);
$hora = substr($novaString, 10, -3);
$minuto = substr($novaString, 13);

$novaData = $ano . "-" . $mes . "-" . $dia . " " . $hora . ":" . $minuto . ":00";

if (isset($data) && !empty($data)) {
    $horario->insertHorario($id_medico, $novaData);
    header("Location: ../../index.php?time_add_success");
}
