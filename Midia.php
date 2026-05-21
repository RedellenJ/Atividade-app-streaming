<?php

declare(strict_types=1);

abstract class Midia{

    public function __construct(private string $tipoMidia, private float $duracao, private int $quantidadeReproducao, 
                                private string $nome, private string $plataforma){
    }

    public function getTipoMidia(): string
    {
        return $this->tipoMidia;
    }

    public function setTipoMidia(string $tipoMidia): void
    {
        $this->tipoMidia = $tipoMidia;
    } 

    public function getDuracao(): float
    {
        return $this->duracao;
    }

    public function setDuracao(float $duracao): void
    {
        $this->duracao = $duracao;
    }

    public function getQuantidadeReproducao(): int
    {
        return $this->quantidadeReproducao;
    }

    public function setQuantidadeReproducao(int $quantidadeReproducao): void
    {
        $this->quantidadeReproducao = $quantidadeReproducao;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getPlataforma(): string
    {
        return $this->plataforma;
    }

    public function setPlataforma(string $plataforma): void
    {
        $this->plataforma = $plataforma;
    }

    abstract public function reproduzir(): string;

}