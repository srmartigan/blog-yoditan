@extends('layouts/admin')

@section('titulo','Admin - Ver entrada')

@section('head')



@endsection
@section('titulo_ventana','ENTRADA')

@section('contenido')
    <h2>Titulo: {{$entrada->titulo}}</h2>
    <h6>Contenido: <?php echo ($entrada->contenido); ?></h6>
    <hr>
    <h6>Creado por: {{$entrada->creador}}</h6>
    <h6>Fecha de Creacion: {{$entrada->created_at}} - Fecha de Modificacion: {{$entrada->updated_at}} </h6>

@endsection
