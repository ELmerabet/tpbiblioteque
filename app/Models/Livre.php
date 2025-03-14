<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    protected $table = 'livres';
    protected $fillable = ['titre', 'date_publication', 'nombre_pages', 'auteur_id'];

    public function auteur(){
        return $this->belongsTo(Auteur::class);
    }
    public function emprunts(){
        return $this->hasMany(Emprunt::class);
    }
}
