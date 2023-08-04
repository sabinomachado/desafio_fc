<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cidade extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'cidades';

    protected $fillable = [
      'nome',
      'estado',
    ];

    protected $dates = [
        'created_at','updated_at','deleted_at'
      ];

      public function medico(): BelongsTo
      {
          return $this->belongsTo(Medico::class);
      }
}
