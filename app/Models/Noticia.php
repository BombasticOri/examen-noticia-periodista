<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = ['pais','ciudad','distrito','periodista_id'];

    public function periodista() {
        return $this->belongsTo('App\Models\Periodista');
    }
}
