<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Editorial;

class LibrosController extends Controller
{
    public function listarLibro()
    {
        $editorial = Editorial::all();
        $libro = Libro::all();
        return view('libros.listlibros',['libro' => $libro ])->with(['editorial' => $editorial ]);
    }
}
