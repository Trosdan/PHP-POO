<?php

  namespace Classes;

  class Carnivoro extends Animal {
    public function habitoAlimentar() {
      echo "<p>Habito de comer: {$this->getCome()}</p>";
    }
  }

?>