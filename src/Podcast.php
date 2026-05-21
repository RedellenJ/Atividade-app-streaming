<?php

declare(strict_types=1);

final class Podcast extends Midia
{
    public function __construct(
        string $titulo,
        string $criador,
        int $duracaoSegundos,
        private int $episodio,
        private string $tema
    ) {
        parent::__construct($titulo, $criador, $duracaoSegundos);
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
