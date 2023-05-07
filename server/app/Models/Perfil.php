<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;
    protected $fillable = [
        'desc_perfil', // usada para lo que es acerca de nosotros
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function multimedia() {
        return $this->hasOne(Multimedia::class, 'id', 'img_id');
    }
}
