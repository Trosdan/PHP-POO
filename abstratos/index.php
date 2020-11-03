<?php

  require_once 'autoload.php';

  use Classes\Carnivoro;
  use Classes\Herbivoro;

  $carnivoro = new Carnivoro();
  $herbivoro = new Herbivoro();
  
  $carnivoro->setCome('Carne');
  $herbivoro->setCome('Vegetal');

  $carnivoro->habitoAlimentar();
  $herbivoro->habitoAlimentar();

?>