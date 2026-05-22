<?php

declare(strict_types=1);

class Playlist {
    public function __construct(private array $midias = []) {}

    public function adicionar(Reproduzivel $midia): void {
        $this->midias[] = $midia;
    }

    public function reproduzirTudo(): void {
        foreach ($this->midias as $midia) {
            echo $midia->reproduzir() . PHP_EOL;
        }
    }
}
