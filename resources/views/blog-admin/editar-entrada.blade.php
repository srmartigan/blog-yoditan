@extends('layouts/admin')

@section('titulo','Admin - Editar Entrada')

@section('head')
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>


@endsection
@section('titulo_ventana','Escritorio - Inicio')

@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Editor de entradas</div>
                    <div class="card-body">
                        <form href="{{ url('/blog-admin/editar-entrada/'.$entrada->id) }}" method="post" >
                            @csrf
                            <div class="form-group">
                                <label for="titulo">Titulo</label>
                                <input type="text" name="titulo" class="form-control" id="formGroupExampleInput"
                                       placeholder="Añadir titulo" value="{{$entrada->titulo}}">
                            </div>
                            <div class="form-group">
                            <textarea class="form-control" name="contenido" id="editor1">
                                {{$entrada->contenido}}
                            </textarea>
                                <script>
                                    var options = {
                                        filebrowserImageBrowseUrl: '../laravel-filemanager?',
                                        filebrowserImageUploadUrl: '../laravel-filemanager/upload?type=Images&_token=',
                                        filebrowserBrowseUrl: '../laravel-filemanager?type=Files',
                                        filebrowserUploadUrl: '../laravel-filemanager/upload?type=Files&_token=',

                                    };
                                </script>
                            </div>
                            <div class="form-group row pull-right">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary" disabled>Ver</button>
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.editorConfig = function( config ) {
            config.uiColor = '#AADC6E';
            config.autoGrow_minHeight = 600;
        };
        CKEDITOR.replace( 'editor1', options );

    </script>

@endsection
