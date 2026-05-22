<?php

declare(strict_types=1);

final class VideoCurto extends Midia
{
    public function __construct(
        string $criador,
        private bool $vertical,
        private string $tipoMidia,
        private float $duracao,
        private int $quantidadeReproducao,
        private string $nome,
        private string $plataforma
    ) {
        parent::__construct($nome, $criador, (int) $duracao);
    }

    public function reproduzir(): string
    {
        return sprintf(
            'Exibindo video curto %s | Plataforma: %s | Formato: %s',
            $this->detalhesBasicos(),
            $this->plataforma,
            $this->vertical ? 'vertical' : 'horizontal'
        );
    }
}