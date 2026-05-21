<?php

abstract class Midia implements Reproduzivel
{
    public function __construct(
        protected string $titulo,
        protected string $artista,
        protected int    $duracao,
    ) {}
}
