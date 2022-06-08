<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voto extends Model
{
    use HasFactory;
    protected $fillable = ['escolha', 'ponto_id'];

    public function ponto()
    {
        return $this->belongsTo(Ponto::class);
    }
}
