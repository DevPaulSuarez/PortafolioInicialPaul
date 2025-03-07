<?php

namespace App\Http\Controllers;

use App\Models\Tecnologia;
use Illuminate\Http\Request;

/**
 * Class TecnologiaController
 * @package App\Http\Controllers
 */
class TecnologiaController extends Controller
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
        $tecnologia = Tecnologia::paginate();

        return view('tecnologia.index', compact('tecnologia'))
            ->with('i', (request()->input('page', 1) - 1) * $tecnologia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tecnologia = new Tecnologia();
        return view('tecnologia.create', compact('tecnologia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    // app/Http/Controllers/TecnologiaController.php

    public function store(Request $request)
    {
        // Validar los datos
        $validatedData = $request->validate(Tecnologia::$rules);

        //dd($validatedData);
        // Crear la tecnologia
        Tecnologia::create($validatedData);

        // Redirigir con mensaje de éxito
        return redirect()->route('tecnologia.index')
            ->with('success', 'Tecnología creada con éxito.');      
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tecnologia = Tecnologia::find($id);

        return view('tecnologia.show', compact('tecnologia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tecnologia = Tecnologia::find($id);

        return view('tecnologia.edit', compact('tecnologia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tecnologia $tecnologia
     * @return \Illuminate\Http\Response
     */
   

    public function update(Request $request, $id)
{
    // Recuperar el objeto Tecnologia
    $tecnologia = Tecnologia::findOrFail($id);
    
    // Validar los datos recibidos
    $validatedData = $request->validate(Tecnologia::$rules);

    // Actualizar el objeto Tecnologia
    $tecnologia->update($validatedData);

    return redirect()->route('tecnologia.index')
        ->with('success', 'Tecnología actualizada con éxito.');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Tecnologia::find($id)->delete();

        return redirect()->route('tecnologia.index')
            ->with('success', 'Tecnología eliminada con éxito.');
    }
}
