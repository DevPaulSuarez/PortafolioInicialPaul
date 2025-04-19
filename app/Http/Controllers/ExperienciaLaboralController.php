<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ExperienciaLaboral;
use App\Models\Tecnologia;
use App\Models\Proyecto;


class ExperienciaLaboralController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Mostrar todas las experiencia laborales del usuario autenticado.
     */
    public function index()
    {

    $experiencia = ExperienciaLaboral::with('proyecto')->paginate(10);


    // Retornar la vista 'experiencia.index', pasando las experiencias laborales y la paginación
    return view('experiencia.index', compact('experiencia'))
        ->with('i', (request()->input('page', 1) - 1) * $experiencia->perPage());
     }

    /**
     * Mostrar formulario para crear una nueva experiencia laboral.
     */
    public function create()
    {
    // Crear una nueva instancia de ExperienciaLaboral
    $experiencia = new ExperienciaLaboral();

    // Obtener todas las tecnologías disponibles
    $tecnologias = Tecnologia::all();
    $proyectos = Proyecto::doesntHave('experienciaLaboral')->get();

    // Pasar tanto la experiencia como las tecnologías a la vista
    return view('experiencia.create', compact('experiencia', 'tecnologias','proyectos'));
    }

    /**
     * Guardar una nueva experiencia laboral en la base de datos.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(ExperienciaLaboral::$rules);
        $experiencia = ExperienciaLaboral::create(array_merge($validatedData, [
            'user_id' => auth()->id(), // Asegura que la experiencia esté vinculada al usuario autenticado
        ]));

        if ($request->has('tecnologias')) {
            $experiencia->tecnologias()->sync($request->tecnologias);
        }

        return redirect()->route('experiencia.index')
            ->with('success', 'Experiencia laboral creada con éxito.');
    }

    /**
     * Mostrar una experiencia laboral específica.
     */
    public function show($id)
    {
        $experiencia = ExperienciaLaboral::find($id);

        return view('experiencia.show', compact('experiencia'));
    }

    /**
     * Mostrar formulario para editar una experiencia laboral.
     */
    public function edit($id)
    {
    // Obtener la experiencia laboral por ID
    $experiencia = ExperienciaLaboral::findOrFail($id);
    // Obtener todos los proyectos disponibles
    $proyectos = Proyecto::all();
    $tecnologias = Tecnologia::all();
    return view('experiencia.edit', compact('experiencia', 'tecnologias', 'proyectos')); 
    }

    /**
     * Actualizar una experiencia laboral en la base de datos.
     */
    public function update(Request $request, $id)
    {


    $experiencia = ExperienciaLaboral::findOrFail($id);
    
    // Validar los datos recibidos
    $validatedData = $request->validate(ExperienciaLaboral::$rules);


    $experiencia->update($validatedData);

    // Verificar si el campo 'tecnologias' está presente en la solicitud
    if ($request->has('tecnologias')) {
        
        $experiencia->tecnologias()->sync($request->tecnologias);
    } else {
        // Si no se seleccionaron tecnologías, elimina todas las relaciones
        $experiencia->tecnologias()->detach();
    }

    return redirect()->route('experiencia.index')
    ->with('success', 'Experiencia laboral actualizada con éxito.');

    }

    /**
     * Eliminar una experiencia laboral de la base de datos.
     */

    public function destroy($id)
    {
        ExperienciaLaboral::find($id)->delete();

        return redirect()->route('experiencia.index')
            ->with('success', 'Experiencia laboral eliminada con éxito.');
    }
}
