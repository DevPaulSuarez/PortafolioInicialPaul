<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 *
 * @property $id
 * @property $nombre
 * @property $imagen
 * @property $descripcion
 * @property $url
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */


/**
 * @OA\Schema(
 *     schema="Proyecto",
 *     type="object",
 *     title="Proyecto",
 *     @OA\Property(property="id", type="integer"),
 *     @OA\Property(property="nombre", type="string"),
 *     @OA\Property(property="imagen", type="string"),
 *     @OA\Property(property="descripcion", type="string"),
 *     @OA\Property(property="url", type="string")
 * )
 */
class Proyecto extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'imagen' => 'required',
		'descripcion' => 'required',
		'url',
        'nombre_en' => 'required|string|max:255', 
        'descripcion_en' => 'required|string',
        'url_live_demo' => 'nullable|url',
        'url_github' => 'nullable|url',
        'url_video_proyecto' => 'nullable|url',
        'publicar_externo' => 'boolean',
        'tipo_proyecto' => 'nullable|in:small_business,non_profit,corporate_website,ecommerce,landing_page,full_system',
        'imagenes.*' => 'image|mimes:jpg,jpeg,png,gif,webp|max:2048', // Cada imagen ≤2MB
        'imagenes' => 'max:3', // Máximo 3 imágenes
        'caracteristicas' => 'nullable|string', // Lista separada por saltos de línea
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'imagen', 'descripcion', 'url', 'user_id', 'demo_url','nombre_en','descripcion_en','url_live_demo','url_github', 'url_video_proyecto','publicar_externo','tipo_proyecto','imagenes', 'caracteristicas'];

    protected $casts = [
    'publicar_externo' => 'boolean',
];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación muchos a muchos con Tecnologia
    public function tecnologia()
    {
        return $this->belongsToMany(Tecnologia::class, 'proyecto_tecnologia')->withTimestamps();
    }

    // Relación con ExperienciaLaboral (un proyecto puede tener muchas experiencias laborales)
    public function experienciaLaboral()
    {
        return $this->hasMany(ExperienciaLaboral::class);
    }

    public function getProjectTypeLabelAttribute()
{
    return [
        'small_business' => 'Small Business',
        'non_profit' => 'Non-Profit Organization',
        'corporate_website' => 'Corporate Website',
        'ecommerce' => 'E-Commerce',
        'landing_page' => 'Landing Page',
        'full_system' => 'Full System',
    ][$this->project_type] ?? 'Undefined';
}

public function getImagenesUrlsAttribute()
{
    if (!$this->imagenes) return [];
    return array_map(fn($img) => asset('storage/proyectosImg/' . $img), json_decode($this->imagenes));
}



}
