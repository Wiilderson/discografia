<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faixas extends Model
{
    use HasFactory;

    protected $fillable = ['numero_faixa', 'album_id', 'faixas', 'duracao'];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
