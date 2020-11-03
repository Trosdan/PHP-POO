<?php

  class Produto 
  {
    public $codigo;
    public $nome;
    public $preco;

    public function imprimeProduto() {
      echo "<p>Produto: {$this->nome}</p>";
    }
  }

?>