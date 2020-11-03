<?php

  namespace Classes;

  class ContaCorrente extends Conta
  {
    public function saca($valor)
    {
      if($this->saldo >= $valor) {
        $this->saldo = $this->saldo - $valor - 0.10;
      }
      else {
          echo "Saldo insuficiente";
      }
    }
  }

?>