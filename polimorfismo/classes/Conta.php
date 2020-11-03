<?php

  namespace Classes;

  abstract class Conta
  {
    protected $saldo;

    public function __construct($saldo=0) {
        $this->saldo = $saldo;
    }

    public function deposita($valor)
    {
      $this->saldo = $this->saldo + $valor;
    }

    public function saca($valor)
    {
      if($this->saldo >= $valor) {
        $this->saldo = $this->saldo-$valor;
      }
      else {
          echo "Saldo insuficiente";
      }
    }

    public function imprimeExtrato()
    {
      echo "<p>Saldo: R$ {$this->saldo}</p>";
    }
  }

?>