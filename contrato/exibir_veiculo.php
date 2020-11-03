<?php

  require_once 'autoload.php';

  use Interfaces\ICaracteristicas;

  use Classes\Veiculo;
  use Classes\Carro;
  use Classes\Moto;
  
  $nome = $_POST['nome'];
  $marca = $_POST['marca'];
  $modelo = $_POST['modelo'];
  $tipoVeiculo = $_POST['tipoVeiculo'];

  if($tipoVeiculo == 'moto') {
    $veiculo = new Moto($nome, $marca, $modelo, $tipoVeiculo);
  } else {
    $veiculo = new Carro($nome, $marca, $modelo, $tipoVeiculo);
  }

  $veiculo->exibeNome();
  $veiculo->exibeMarca();
  $veiculo->exibeModelo();

?>