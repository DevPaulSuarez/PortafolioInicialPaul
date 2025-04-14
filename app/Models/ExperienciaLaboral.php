<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienciaLaboral extends Model
{
    use HasFactory;



    protected $table = 'experiencia_laboral'; // Asegúrate de que el nombre de la tabla sea correcto
    protected $perPage = 20;
    protected $fillable = ['empresa', 'cargo', 'fecha_inicio', 'fecha_fin', 'proyecto_id', 'descripcion','empresa_en', 'cargo_en','descripcion_en'];


    public static $rules = [
        'empresa' => 'required',
        'cargo' => 'required',
        'fecha_inicio' => 'required|date',
        'fecha_fin' => 'nullable|date',
        'proyecto_id' => 'required|exists:proyectos,id', // Asegurarse de que el proyecto exista
        'descripcion' => 'required',
        'tecnologias' => 'array', // Asegurar que sea un array
        'empresa_en' => 'nullable|string',
        'cargo_en' => 'nullable|string',
        'descripcion_en' => 'nullable|string',
    ];

    // Relación con Proyecto (pertenece a un proyecto)
    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'proyecto_id');
    }
    // Relación muchos a muchos con Tecnologia
    public function tecnologias()
    {
        return $this->belongsToMany(Tecnologia::class, 'experiencia_tecnologia', 'experiencia_id', 'tecnologia_id')->withTimestamps();
    }


   
}
