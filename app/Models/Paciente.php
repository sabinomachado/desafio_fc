<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\MedicoPaciente;

class Paciente extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'pacientes';

    protected $fillable = [
      'nome',
      'cpf',
      'celular'
    ];

    protected $dates = [
        'created_at','updated_at','deleted_at'
      ];

      public function medicoPaciente(): HasMany
      {
          return $this->hasMany(MedicoPaciente::class);
      }
    }