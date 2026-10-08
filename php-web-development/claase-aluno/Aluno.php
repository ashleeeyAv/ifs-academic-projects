<?php
class Aluno{
    private string $nome;
    private int $idade;
    private string $curso;

    public function __construct(string $nome, int $idade, string $curso)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->curso = $curso;

    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of idade
     */ 
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @return  self
     */ 
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of curso
     */ 
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     *
     * @return  self
     */ 
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    public function apresentar(){
        echo "O aluno: {$this->nome}<br> Idade: {$this->idade} anos <br> Curso: {$this->curso} ";
    }
}


