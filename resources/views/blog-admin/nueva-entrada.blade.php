@extends('layouts/admin')

@section('titulo','Nueva entrada -')

@section('head')



@endsection
@section('titulo_ventana','Nueva Entrada')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Editor de entradas</div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" class="form-control" id="formGroupExampleInput"
                                placeholder="Añadir titulo">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="135" rows="10">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolorem tempora animi hic, vero labore totam nisi corrupti magni sint ad nemo eos perferendis blanditiis quas? Nesciunt soluta dolorum nam?
                            </textarea>
                        </div>
                        <div class="form-group row pull-right">
                            <div class="col-sm-12">
                              <button type="submit" class="btn btn-primary">Ver</button>
                              <button type="submit" class="btn btn-primary">Guardar</button>
                              <button type="submit" class="btn btn-primary">Publicar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection