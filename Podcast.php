<?php

require_once "Midia.php";
class Podcast extends Midia
{
    public function reproduzir(): string
    {
        return "Reproduzindo podcast: " . $this->titulo;
    }
}