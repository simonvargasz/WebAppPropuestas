<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profesor extends Model
{
    use HasFactory;
    protected $table = 'profesores';

    public function profesorpropuestas():HasMany
    {
        return $this->hasMany(ProfesorPropuesta::class);
    }
}
