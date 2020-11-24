<?php
include_once '../model/Conexao.class.php';
include_once '../model/Manager.class.php';

$medico = new Medicos();

$update_client = $_POST;
$id = $_POST['id'];

if (isset($id) && !empty($id)) {
    $medico->updateMedico("registros", $update_client, $id);

    header("Location: ../../index.php?client_update");
}
