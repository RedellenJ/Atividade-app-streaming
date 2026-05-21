<?php

declare(strict_types=1);

final class Musica extends Midia
{
    public function __construct(
        string $titulo,
        string $artista,
        int $duracaoSegundos,
        private string $album,
        private string $genero
    ) {
        parent::__construct($titulo, $artista, $duracaoSegundos);
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
