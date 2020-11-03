<?php

  require_once 'autoload.php';

  use Classes\Cadastro;

  echo "<a href='cadastro.html'>Novo Cadastro</a>";

  $conn = new PDO('mysql:host=localhost;dbname=sistema', 'root', '');

  $query = $conn->prepare("SELECT * FROM cadastro");
  $query->execute();

  $cadastros = $query->fetchAll(PDO::FETCH_ASSOC);

  foreach($cadastros as $cadastro) {
    $cad = new Cadastro($cadastro['nome'], $cadastro['telefone'], $cadastro['email']);
    
    $cad->exibir();
  }

  $conn = null;

?>