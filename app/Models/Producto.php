<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // Campos que pueden ser asignados masivamente
    protected $fillable = ['nombre', 'precio', 'marca_id'];

    /**
     * Relación: un producto pertenece a una marca.
     */
    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
}
