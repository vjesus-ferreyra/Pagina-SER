<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'tipo',
        'url',
        'tamaño',
        'formato',
        'perfil'
    ];

    public function perfil() {
        return $this->belongsTo(Perfil::class, 'img_id', 'id');
    }

    public function blog() {
        return $this->belongsTo(Blog::class);
    }
}
