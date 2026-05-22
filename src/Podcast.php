<?php

declare(strict_types=1);

final class Podcast extends Midia
{
    public function __construct(
        private string $criador,
        private int $episodio,
        private string $tema,
        private string $tipoMidia,
        private float $duracao,
        private int $quantidadeReproducao,
        private string $nome,
        private string $plataforma
    ) {
        parent::__construct($tipoMidia, $duracao, $quantidadeReproducao, $nome, $plataforma);
    }

    public function reproduzir(): string
    {
        return sprintf(
            'Reproduzindo podcast %s | Episodio #%d | Tema: %s',
            $this->detalhesBasicos(),
            $this->episodio,
            $this->tema
        );
    }
}