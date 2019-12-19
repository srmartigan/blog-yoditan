<?php


namespace App;


class Post
{
    public $titulo;

    public $contenido;


    public function __construct($titulo, string $contenido)
    {

        $this->titulo = $titulo;
        $this->contenido = $contenido;
    }

    public static function create($titulo, string $contenido)
    {
        return new Post($titulo,$contenido);
    }
}
