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

    public function listHorarios($table, $id)
    {
        $pdo = parent::get_instance();
        $sql = "SELECT * FROM $table WHERE id_medico = :id ORDER BY data_horario ASC";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        return $sql->fetchAll();
    }

    public function reservaHorario($id)
    {
        $pdo = parent::get_instance();
        $sql = "UPDATE horario SET horario_agendado = :agendado WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":agendado", intval(1));
        $sql->bindValue(":id", $id);
        $sql->execute();
    }

    public function deleteHorario($id_horario)
    {
        try {
            $pdo = parent::get_instance();
            $sql = $pdo->prepare('DELETE FROM horario WHERE id = :id');
            $sql->bindParam(':id', $id_horario);
            $sql->execute();

            echo $sql->rowCount();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}
