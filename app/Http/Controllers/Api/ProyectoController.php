<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Proyecto;

/**
 * @OA\Tag(
 *     name="Proyectos",
 *     description="Endpoints de proyectos"
 * )
 */
class ProyectoController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/proyectos",
     *     summary="Listar todos los proyectos",
     *     tags={"Proyectos"},
     *     @OA\Response(
     *         response=200,
     *         description="Lista de proyectos",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Proyecto")
     *         )
     *     )
     * )
     */
    public function index()
    {
        return response()->json(
            Proyecto::with(['experienciaLaboral.tecnologias'])->get()
        );
    }
}
