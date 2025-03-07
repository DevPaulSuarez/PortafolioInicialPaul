<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tecnologia extends Model
{
    use HasFactory;

    static $rules = [
        'nombre' => 'required|unique:tecnologia|max:255',
        'icono' => 'nullable|string',
        'descripcion' => 'nullable|string',
        'categorias' => 'required|in:lenguaje,framework,herramientas,database',
    ];

    protected $perPage = 20;

    protected $table = 'tecnologia'; // Especifica el nombre de la tabla
    protected $fillable = ['nombre', 'icono', 'descripcion','categorias'];

    // Relación muchos a muchos con Proyecto
    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class, 'proyecto_tecnologia')->withTimestamps();
    }


    // Relación muchos a muchos con ExperienciaLaboral
    public function experienciaTecnologia()
    {
        return $this->belongsToMany(ExperienciaLaboral::class, 'experiencia_tecnologia', 'tecnologia_id', 'experiencia_id')->withTimestamps();
    }
}
