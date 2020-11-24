<?php

class Medicos extends Conexao
{
    /**
     * Método para inserir novo médico
     */
    public function insertMedico($email, $nome, $senha)
    {
        $pdo = parent::get_instance();
        $sql = "INSERT INTO medico (email, nome, senha, data_criacao, data_alteracao) 
                VALUES (:email, :nome, :senha, NOW(), NOW())";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":senha", $senha);
        $sql->execute();
    }

    /**
     * Método para selecionar médico pelo id
     */
    public function getMedico($table, $id)
    {
        $pdo = parent::get_instance();
        $sql = "SELECT * FROM $table WHERE id = :id";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(":id", $id);
        $statement->execute();

        return $statement->fetchAll();
    }

    /**
     * Método para editar um médico
     */
    public function updateMedico($table, $data, $id)
    {
        $pdo = parent::get_instance();
        $newValues = "";

        foreach ($data as $key => $value) {
            $newValues .= "$key=:$key, ";
        }
        $newValues = substr($newValues, 0, -2);

        $sql = "UPDATE $table SET $newValues WHERE id = :id";
        $statement = $pdo->prepare($sql);

        foreach ($data as $key => $value) {
            $statement->bindValue(":$key", $value, PDO::PARAM_STR);
        }
        $statement->execute();
    }

    public function listMedicos($table)
    {
        $pdo = parent::get_instance();
        $sql = "SELECT * FROM $table ORDER BY nome ASC";
        $statement = $pdo->query($sql);
        $statement->execute();

        return $statement->fetchAll();
    }
}
