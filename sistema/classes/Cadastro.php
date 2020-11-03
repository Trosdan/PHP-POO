<?php

  namespace Classes;

  use PDO;

  class Cadastro {
    private $nome;
    private $telefone;
    private $email;

    public function __construct($nome, $telefone, $email) {
      $this->nome = $nome;
      $this->telefone = $telefone;
      $this->email = $email;
    }

    public function inserir() {
      $conn = new PDO('mysql:host=localhost;dbname=sistema', 'root', '');
      
      $query = $conn->prepare("INSERT INTO cadastro (nome, telefone, email) VALUES (:nome, :telefone, :email)");

      $query->bindParam(':nome', $this->getNome());
      $query->bindParam(':telefone', $this->getTelefone());
      $query->bindParam(':email', $this->getEmail());
      
      $query->execute();
      
      $conn = null;
    }
    
    public function exibir() {
      echo "<p>Nome: {$this->nome}</p>";
      echo "<p>Telefone: {$this->telefone}</p>";
      echo "<p>Email: {$this->email}</p>";
      echo "<hr></hr>";
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of telefone
     */ 
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */ 
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
  }

?>