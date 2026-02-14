<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

/**
 * @OA\Tag(name="Test")
 */
class TestController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/test",
     *     tags={"Test"},
     *     summary="Endpoint de prueba",
     *     @OA\Response(response=200, description="Ok")
     * )
     */
    public function index()
    {
        return response()->json(['ok' => true]);
    }
}
