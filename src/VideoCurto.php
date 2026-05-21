<?php

declare(strict_types=1);

final class VideoCurto extends Midia
{
    public function __construct(
        string $titulo,
        string $criador,
        int $duracaoSegundos,
        private string $plataforma,
        private bool $vertical
    ) {
        parent::__construct($titulo, $criador, $duracaoSegundos);
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
