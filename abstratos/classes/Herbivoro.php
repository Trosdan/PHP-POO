<?php

  namespace Classes;

  class Herbivoro extends Animal {
    public function habitoAlimentar() {
      echo "<p>Habito de comer: {$this->getCome()}</p>";
    }
  }

?>