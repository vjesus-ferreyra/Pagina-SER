<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'contenido'
    ];

    public function usuario() {
        return $this->belongsTo(Usuario::class);
    }

    public function multimedia() {
        return $this->hasMany(Multimedia::class);
    }
}
