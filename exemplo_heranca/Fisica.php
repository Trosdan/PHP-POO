<?php

  class Fisica extends Pessoa
  {
    private $cpf;

    public function __construct($nome, $cpf)
    {
      parent::__construct($nome);
      $this->cpf = $cpf;
    }

    public function validarCPF()
    {
      echo "<p>CPF: {$this->cpf}</p>"
    }

  }

?>