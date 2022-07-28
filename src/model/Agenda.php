<?php


class Agenda
{
    private int $id;
    private string $nome;
    private string $celular;
    private string $fone;
    private string $cpf;

    //Get - Obter, retorna o valor da atributo/variável.
    //Set - Recebe, insere o valor à variável. 

    public function getId() : int
    {
        return $this->id;
    }

    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self 
    {
        $this->nome = $nome;
        return $this;
    }
    
    public function getCelular() : string
    {
        return $this->celular;
    }

    public function setCelular(string $celular) : self
    {
        $this->celular = $celular;
        return $this;
    }

    public function getFone() : string
    {
        return $this->fone;
    }

    public function setFone(string $fone) : self
    {
        $this->fone = $fone;
        return $this;
    }

    public function getCpf() : string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf) : self
    {
        $this->cpf = $cpf;
        return $this;
    }
}