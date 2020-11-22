<?php
include_once '../model/Conexao.class.php';
include_once '../model/Medicos.class.php';

$medico = new Medicos();

$data = $_POST;

if (isset($data) && !empty($data)) {
    $medico->insertMedico("medico", $data);
    header("Location: ../index.php?client_add_success");
}
