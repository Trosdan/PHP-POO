<?php

  require_once "Produto.php";

  $produto = new Produto();

  $produto->codigo = "001";
  $produto->nome = "Camisa do Sport";
  $produto->preco = 320;
  

  $produto->imprimeProduto();
?>
