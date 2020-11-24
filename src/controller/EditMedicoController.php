<?php
include_once '../model/Conexao.class.php';
include_once '../model/Medicos.class.php';

$medico = new Medicos();

$update_client = $_POST;
// var_dump($update_client); exit;
$nome = $_POST['nome'];
$senha = md5($_POST['senha']);
$novaSenha = md5($_POST['newSenha']);

$senhaAntiga = "";

foreach ($medico->getMedico("medico", $_POST['id']) as $m) {
    $senhaAntiga = $m[3];
}

if (isset($update_client) && !empty($update_client)) {
    if ($senhaAntiga == $senha) {
        $medico->updateMedico("medico", $nome, $senha, $_POST['id']);
        header("Location: ../../index.php?msg=client_update_success");
    } else {
        header("Location: ../../index.php?erro=password_error");
    }
}
