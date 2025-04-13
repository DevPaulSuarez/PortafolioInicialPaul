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
         // Recupera el idioma desde la sesión
         $idioma = session('locale', 'es');

        $proyectos = Proyecto::paginate();
        $tecnologias = Tecnologia::all();
       // $experiencias = ExperienciaLaboral::all();
        $experiencias = ExperienciaLaboral::orderBy('fecha_inicio', 'asc')->get();
        $tecnologiasPorCategoria = $tecnologias->groupBy('categorias');

        return view('welcome', compact('idioma','proyectos','tecnologias','tecnologiasPorCategoria','experiencias'));
    }
}
