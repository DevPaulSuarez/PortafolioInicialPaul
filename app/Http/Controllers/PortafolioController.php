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
    
        // Cargar proyectos con relaciones
        $proyectos = Proyecto::with('experienciaLaboral.tecnologias')->paginate();
        $tecnologias = Tecnologia::all();
        $experiencias = ExperienciaLaboral::orderBy('fecha_inicio', 'asc')->get();
        $tecnologiasPorCategoria = $tecnologias->groupBy('categorias');
    
        // 🔁 Conteo de tecnologías más usadas
        $conteoTecnologias = collect();
    
        foreach ($proyectos as $proyecto) {
            $tecnologiasProyecto = $proyecto->experienciaLaboral->flatMap(function ($exp) {
                return $exp->tecnologias;
            });
    
            foreach ($tecnologiasProyecto as $tec) {
                $conteoTecnologias[$tec->nombre] = [
                    'icono' => $tec->icono,
                    'nombre' => $tec->nombre,
                    'conteo' => ($conteoTecnologias[$tec->nombre]['conteo'] ?? 0) + 1
                ];
            }
        }
    
        // Ordenar y tomar las 5 más usadas
        $topTecnologias = collect($conteoTecnologias)->sortByDesc('conteo')->take(9);
    
        return view('welcome', compact(
            'idioma',
            'proyectos',
            'tecnologias',
            'tecnologiasPorCategoria',
            'experiencias',
            'topTecnologias' // <-- esto se envía a la vista
        ));
    }
    
}
