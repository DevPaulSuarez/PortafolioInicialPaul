<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

/**
 * Class ProyectoController
 * @package App\Http\Controllers
 */
class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $userId = auth()->id();

        $proyectos = Proyecto::where('user_id', $userId)
            ->with(['experienciaLaboral.tecnologias']) // Esto carga las tecnologías asociadas a experiencias
            ->paginate();
    
        return view('proyecto.index', compact('proyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proyecto = new Proyecto();
        return view('proyecto.create', compact('proyecto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request)
{
    // Validar campos incluyendo los nuevos
    $validatedData = $request->validate(Proyecto::$rules);

    // Manejo de imágenes
    $imagenesNombres = [];
    if ($request->hasFile('imagenes')) {
                // Tomamos solo las 3 primeras imágenes
        $files = array_slice($request->file('imagenes'), 0, 3);

        foreach ($files as $file) {
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/proyectosImg', $filename);
            $imagenesNombres[] = $filename;
        }
    }

    // Crear el proyecto
    Proyecto::create(array_merge($validatedData, [
        'user_id' => auth()->id(),
        'imagenes' => json_encode($imagenesNombres),
        'caracteristicas' => $request->caracteristicas ? json_encode(explode("\n", $request->caracteristicas)) : null
    ]));

    return redirect()->route('proyectos.index')
                     ->with('success', 'Proyecto creado con éxito.');
}


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyecto::find($id);

        return view('proyecto.show', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);

        return view('proyecto.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Proyecto $proyecto
     * @return \Illuminate\Http\Response
     */
public function update(Request $request, Proyecto $proyecto)
{
    $validatedData = $request->validate(Proyecto::$rules);

    // Manejo de nuevas imágenes (opcional)
    $imagenesNombres = json_decode($proyecto->imagenes) ?? [];
    if ($request->hasFile('imagenes')) {
$files = array_slice($request->file('imagenes'), 0, 3);
        $imagenesNombres  = []; // eliminamos las anteriores para reemplazarlas
        foreach ($files as $file) {
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/proyectosImg', $filename);
            $imagenesNombres[] = $filename;
        }
    }

    $proyecto->update(array_merge($validatedData, [
        'imagenes' => json_encode($imagenesNombres),
        'caracteristicas' => $request->caracteristicas ? json_encode(explode("\n", $request->caracteristicas)) : null
    ]));

    return redirect()->route('proyectos.index')
                     ->with('success', 'Proyecto actualizado con éxito.');
}


    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $proyecto = Proyecto::find($id)->delete();

        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto deleted successfully');
    }
}
