<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editorial;

class EditorialesController extends Controller
{
    public function registro_editor()
    {
        return view('editor.registro');
    }

    public function mensaje_editor(Request $request)
    {
        
        $editorial = new Editorial();
        $editorial ->nombre = $request->input('nombre');
        $editorial ->direccion = $request->input('direccion');
        $editorial ->ciudad = $request->input('ciudad');
        $editorial ->telefono = $request->input('telefono');
        $editorial ->save();
        return redirect()->route('listaEditorial');
    }

    public function listar()
    {
        $editorial = Editorial::all();
        return view('editor.listar',['editorial' => $editorial]);
    }

    public function formulario($id)
    {
        $editorial = Editorial::findOrFail($id);
        return view('editor.formulario', compact('editorial'));
    }

    public function actualizar(Request $request, $id)
    {
        $editorial = Editorial::findOrFail($id);
        $editorial ->nombre = $request->input('nombre');
        $editorial ->direccion = $request->input('direccion');
        $editorial ->ciudad = $request->input('ciudad');
        $editorial ->telefono = $request->input('telefono');
        $editorial ->save();
        return redirect()->route('listaEditorial');
    }
}
