<?php

  namespace Classes;

  abstract class Animal {
    protected $come;

    abstract function habitoAlimentar();
    
    public function getCome()
    {
        return $this->come;
    }
    
    public function setCome($come)
    {
        $this->come = $come;

        return $this;
    }
  }
  
?>