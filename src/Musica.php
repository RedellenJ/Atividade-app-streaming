<?php

declare(strict_types=1);

final class Musica extends Midia
{
    public function __construct(
        string $artista,
        private string $album,
        private string $genero,
        private string $tipoMidia,
        private float $duracao,
        private int $quantidadeReproducao,
        private string $nome,
        private string $plataforma
    ) {
        parent::__construct($nome, $artista, (int) $duracao);
    }

    public function reproduzir(): string
    {
        return sprintf(
            'Tocando musica %s | Album: %s | Genero: %s',
            $this->detalhesBasicos(),
            $this->album,
            $this->genero
        );
    }
}