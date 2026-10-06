<?php

class ContaBancaria{
    private string $titular;
    private float $saldo;

    

    /**
     * Get the value of titular
     */ 
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * Set the value of titular
     *
     * @return  self
     */ 
    public function setTitular($titular)
    {
        $this->titular = $titular;

        return $this;
    }

    /**
     * Get the value of saldo
     */ 
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set the value of saldo
     *
     * @return  self
     */ 
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    public function depositar(float $valor)
    {
        $this->saldo += $valor;
        return $this->saldo;
    }

    public function sacar(float $valor)
    {
        $this->saldo -= $valor;
        return $this->saldo;
    }
}

?>