<?php
include_once '../model/Conexao.class.php';
include_once '../model/Medicos.class.php';

$medico = new Medicos();

$data = $_POST;
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

// var_dump($data);
// exit;

if (isset($data) && !empty($data)) {
    $medico->insertMedico($email, $nome, $senha);
    header("Location: ../../index.php?client_add_success");
} else {
    header("Location: ../../index.php?add_error");
}
