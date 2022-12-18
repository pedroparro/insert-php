<?php
require_once("Config.php");

class Crud extends Config
{
    //INSERT
    public function insertDb($titulo,$descricao,$ingredientes,$tempo)
    {
        try {
            $sql = "INSERT INTO receita (id, titulo, descricao, ingredientes, tempo) VALUES (NULL, :titulo, :descricao, :ingredientes, :tempo)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(":titulo",$titulo);
            $stmt->bindValue(":descricao",$descricao);
            $stmt->bindValue(":ingredientes",$ingredientes);
            $stmt->bindValue(":tempo",$tempo);
            $stmt->execute();

            return $stmt;

        } catch (\Exception $e) {
            die("Erro" . $e->getMessage());
        }
    }

    //VISUALIZAR
    public function visualizarDb()
    {
        try {
            $sql = "SELECT * FROM receita";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;

        } catch (\Exception $e) {
            die("Erro" . $e->getMessage());
        }
    }
}


?>