<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
        use HasFactory;
        protected $fillable = ["annee"];

    public function classe(){
       return $this->belongsTo(Classe::class);
}
}