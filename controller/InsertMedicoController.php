<?php
include_once '../classes/Conexao.class.php';
include_once '../classes/Medicos.class.php';

$manager = new Medicos();

$data = $_POST;

if (isset($data) && !empty($data)) {
    $manager->insertMedico("registros", $data);
    header("Location: ../index.php?client_add_success");
}
