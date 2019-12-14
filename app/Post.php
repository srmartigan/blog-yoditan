<?php


namespace App;


class Post
{
    public $titulo;

    public $contenido;


    public function __construct(string $titulo = null, string $contenido = null)
    {
        $this->titulo = $titulo;
        $this->contenido = $contenido;
    }

    public static function create(string $titulo = null , string $contenido = null)
    {
        return new Post($titulo,$contenido);
    }
}
