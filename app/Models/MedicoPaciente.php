<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Medico;
use App\Models\Paciente;

class MedicoPaciente extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'medico_paciente';

    protected $fillable = [
      'medico_id',
      'paciente_id',
    ];

    protected $dates = [
        'created_at','updated_at','deleted_at'
      ];

    public function medico(): BelongsTo
    {
        return $this->belongsTo(Medico::class);
    }

    public function paciente(): BelongsTo
    {
        return $this->belongsTo(Paciente::class);
    }
}