<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faixa extends Model
{
    use HasFactory;

    protected $fillable = [
        "nome",
        "album_id"
    ];

    public function album() {
        return $this->belongsTo(Album::class);
    }

}
