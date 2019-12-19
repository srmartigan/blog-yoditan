<?php

namespace App\Http\Controllers;

use App\Post;

use App\User;
use Exception;
use Illuminate\Http\Request;
use App\Entrada;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('blog-admin.blog-admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('blog-admin.nueva-entrada');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        if($this->validarEntrada($request)){
            return redirect()->back();
        };

        $post = Post::create($request->titulo, $request->contenido);
        $entrada = new Entrada();
        $entrada->titulo = $post->titulo;
        $entrada->contenido = $post->contenido;
        $entrada->creador = Auth::user()->name;
        $entrada->save();
        toastr()->success('Post Guardado correctamente!!');

        return $this->list();

    }

    public function list()
    {
        $listadoEntradas = Entrada::all();
        return view('blog-admin.listado-entradas')->with([
            'listadoEntradas' => $listadoEntradas
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show(int $id)
    {
        $entrada = Entrada::all()->find($id);

        return view('blog-admin.ver-entrada')->with([
            'entrada' => $entrada
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $entrada = Entrada::all()->find($id);

        return view('blog-admin.editar-entrada')->with([
            'entrada' => $entrada
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     * @throws Exception
     */
    public function update(Request $request, int $id)
    {
        if($this->validarEntrada($request)){
            return redirect()->back();
        };

        try {
            $entrada = Entrada::all()->find($id);
            $entrada->update([
                'titulo' => $request->titulo,
                'contenido' => $request->contenido
            ]);
            toastr()->success('Entrada actualizada');

        }catch (Exception $e) {
            throw new Exception('Fallo al actualizar entrada');
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        Entrada::destroy($id);
        toastr()->success('La entrada a sido borrada!!');
        return redirect()->back();
    }

    private function validarEntrada(Request $request )
    {
        $validator = Validator::make($request->all(), [
            'titulo' => 'required',
            'contenido' => '',
        ]);

        if ($validator->fails()) {
            toastr()->error('Falta el campo titulo por añadir', 'Error');
        }

        return $validator->fails();
    }
}
