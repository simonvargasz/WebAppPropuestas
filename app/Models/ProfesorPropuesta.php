<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Profesor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\OneToMany;

class ProfesorPropuesta extends Model
{
    use HasFactory;
	protected $table = 'profesor_propuesta';
	protected $primaryKey = ['propuesta_id', 'profesor_rut'];
	public $incrementing = false;
	protected $fillable = [
		'propuesta_id',
		'profesor_rut',
		'fecha',
		'comentario',
	];
	protected $foreignKey = ['propuesta_id', 'profesor_rut'];
	

	public function propuesta(): BelongsTo
	{
		return $this->belongsTo(Propuesta::class, 'propuesta_id', 'id');
	}

	public function profesor(): BelongsTo
	{
		return $this->belongsTo(Profesor::class, 'profesor_rut', 'rut');
	}
	
}
