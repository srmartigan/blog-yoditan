@extends('layouts/admin')

@section('titulo','Listado Entradas -')

@section('head')
@endsection

@section('titulo_ventana','Listado Entradas')

@section('contenido')
    <h1>Estamos en la ventana Listado Entradas</h1>

    <table class="table table-sm table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo de la entrada</th>
            <th scope="col">Fecha</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php $con = 0; ?>
        @foreach($listadoEntradas as $entrada)
            <tr>
                <th scope="row">{{$con++}}</th>
                <td>{{$entrada->titulo}}</td>
                <td>{{Datetime::createFromFormat('Y-m-d H:i:s',$entrada->created_at)->format('d-m-Y')}}</td>
                <td>
                    <a href="{{url('blog-admin/ver-entrada/'.$entrada->id)}}" class="btn btn-primary"
                       type="submit" >Ver</a>
                    <a href="{{url('blog-admin/editar-entrada/'.$entrada->id)}}" class="btn btn-primary ml-2"
                       type="submit" >Editar</a>
                    <a href="{{url('blog-admin/borrar-entrada/'.$entrada->id)}}" class="btn btn-danger ml-2"
                       type="submit" >Borrar</a>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>
@endsection
