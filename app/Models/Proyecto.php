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
class Proyecto extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'imagen' => 'required',
		'descripcion' => 'required',
		'url' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'imagen', 'descripcion', 'url', 'user_id', 'demo_url'];

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

}
