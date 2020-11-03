<?php

  require_once 'autoload.php';

  use Classes\Conta;
  use Classes\ContaPoupanca;
  use Classes\ContaCorrente;

  $contaPoupanca = new ContaPoupanca(500);
  $contaCorrente = new ContaCorrente(200);

  $contaPoupanca->saca(100);
  $contaCorrente->saca(100);

  $contaPoupanca->imprimeExtrato(100);
  $contaCorrente->imprimeExtrato(100);

?>