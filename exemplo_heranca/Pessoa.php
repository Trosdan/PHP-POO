<?php

  class Pessoa
  {
    protected $nome;

    public function __contruction($nome)
    {
      parent::__construct($nome);
      this->name = $nome;
    }

    public function excreverNome()
    {
      echo "<p>Nome ${$this->nome}</p>";
    }
  }

?>