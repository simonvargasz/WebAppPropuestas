<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Propuesta extends Model
{
    use HasFactory;
	protected $table = 'propuestas';
	protected $primaryKey = 'id';
	protected $primaryKeyType = 'int';
	protected $dates = ['fecha'];

	public function estudiante(): BelongsTo
	{
		return $this->belongsTo(Estudiante::class);
	}

	public function profesorPropuestas(): BelongsToMany
	{
		return $this->belongsToMany(ProfesorPropuesta::class);
	}
}
