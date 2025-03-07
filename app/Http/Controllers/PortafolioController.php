<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\Tecnologia; 
use App\Models\ExperienciaLaboral; 
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::paginate();
        $tecnologias = Tecnologia::all();
        $experiencias = ExperienciaLaboral::all();
        $tecnologiasPorCategoria = $tecnologias->groupBy('categorias');

        return view('welcome', compact('proyectos','tecnologias','tecnologiasPorCategoria','experiencias'));
    }
}
