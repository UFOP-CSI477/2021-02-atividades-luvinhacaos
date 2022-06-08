<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ponto extends Model
{
    use HasFactory;
    protected $fillable = ['descricao', 'tipo', 'voto'];

    public function voto()
    {
        return $this->belongsTo(Voto::class);
    }
}
