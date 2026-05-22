<?php

declare(strict_types=1);

abstract class Midia implements Reproduzivel
{
    public function __construct(
        private string $titulo,
        private string $criador,
        private int $duracaoSegundos
    ) {
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getCriador(): string
    {
        return $this->criador;
    }

    public function getDuracaoSegundos(): int
    {
        return $this->duracaoSegundos;
    }

    protected function detalhesBasicos(): string
    {
        return sprintf(
            '%s - %s (%ds)',
            $this->titulo,
            $this->criador,
            $this->duracaoSegundos
        );
    }

    abstract public function reproduzir(): string;
}