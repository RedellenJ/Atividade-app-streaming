<?php

require_once "Midia.php";
class Musica extends Midia
{
    public function reproduzir(): string
    {
        return "Reproduzindo música: " . $this->titulo;
    }
}
