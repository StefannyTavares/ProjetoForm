<?php

require_once "../model/Agenda.php";
require "Connect.php";


class AgendaDao extends Agenda
{
    private PDO $conex; 

    public function __construct()
    {
        $temp = new Connect();
        $this->conex = $temp->getConn();
    }

    public function insert() : void
    {
        $query = "INSERT INTO agend (nome, celular, fone, cpf) VALUES (:nome, :celular, :fone, :cpf)";

        $statement = $this->conex->prepare($query);
        
        //bind = troca 

        $statement->bindValue(':nome', $this->getNome());
        $statement->bindValue(':celular', $this->getCelular());
        $statement->bindValue(':fone', $this->getFone());
        $statement->bindValue(':cpf', $this->getCpf());

        $statement->execute();
    }

    public function getAll() : array
    {
        $query = "SELECT * FROM agend";

        $statement = $this->conex->prepare($query);

       $statement->execute();
       

       return $statement->fetchAll(PDO::FETCH_ASSOC);
    }  

    public function getOne(int $id) : void
    {
        $query = "SELECT * FROM agend WHERE id = :id";

        $statement = $this->conex->prepare($query);
        $statement->bindValue(":id", $id);
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_ASSOC);

        $this->setId($result["id"])
             ->setNome($result["nome"])
             ->setCelular($result["celular"])
             ->setFone($result["fone"])
             ->setCpf($result["cpf"])
        ;
    }

    public function update() : void
    {
        $query = "UPDATE agend SET nome=:nome, celular=:celular, fone=:fone, cpf=:cpf WHERE id = :id";

        $statement = $this->conex->prepare($query);

        $statement->bindValue(":id", $this->getId());
        $statement->bindValue(":nome", $this->getNome());
        $statement->bindValue(":celular", $this->getCelular());
        $statement->bindValue(":fone", $this->getFone());
        $statement->bindValue(":cpf", $this->getCpf());
        $statement->execute();
    }

    public function delete(int $id) : void
    {
        $query = "DELETE FROM agend WHERE id=:id";

        $statement = $this->conex->prepare($query);
        $statement->bindValue(":id", $id);
        $statement->execute();
    }
}