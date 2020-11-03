<?php

  namespace Classes;

  use Interfaces\ICaracteristicas;
  
  class Moto extends Veiculo implements ICaracteristicas {
    public function exibeNome() {
      echo "<p>Nome da moto: {$this->getNome()}</p>";
    }
    public function exibeMarca() {
      echo "<p>Marca da moto: {$this->getMarca()}</p>";
    }
    public function exibeModelo() {
      echo "<p>Modelo da moto: {$this->getModelo()}</p>";
    }
  }

?>