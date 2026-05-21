<?php

class Playlist {
    private array $midias = [];

    
    public function adicionar($midia): void {
        $this->midias[] = $midia;
    }

    public function reproduzirTudo(): void {
        foreach ($this->midias as $midia) {
            echo $midia->reproduzir() . "<br>";
        }
    }
}
