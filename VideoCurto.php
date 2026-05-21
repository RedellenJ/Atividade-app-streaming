<?php

require_once "Midia.php";
class VideoCurto extends Midia
{
    public function reproduzir(): string
    {
        return "Reproduzindo vídeo curto: " . $this->titulo;
    }
}