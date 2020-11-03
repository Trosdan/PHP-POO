<?php

  class Fisica extends Pessoa
  {
    private $cnpj;

    public function __construct($nome, $cnpj)
    {
      parent::__construct($nome);
      $this->cnpj = $cnpj;
    }

    public function validarCNPJ()
    {
      echo "<p>cnpj: {$this->cnpj}</p>"
    }

  }

?>