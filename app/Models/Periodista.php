<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodista extends Model
{
    use HasFactory;

    protected $fillable = ['nombres','apellidos','edad','especialidad','numerocelular'];

    public function noticia() {
        return $this->hasOne('App\Models\Noticia');
    }
}
