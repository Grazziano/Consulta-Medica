<?php

class Horario extends Conexao
{
    public function insertHorario($id_medico, $data_horario)
    {
        $pdo = parent::get_instance();
        $sql = "INSERT INTO horario (id_medico, data_horario, horario_agendado, data_criacao, data_alteracao) 
                VALUES (:id_medico, :data_horario, :horario_agendado, NOW(), NOW())";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":id_medico", $id_medico);
        $sql->bindValue(":data_horario", $data_horario);
        $sql->bindValue(":horario_agendado", 0);
        $sql->execute();
    }
}
