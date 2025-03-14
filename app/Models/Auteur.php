<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    protected $table = 'auteurs';
    protected $fillable = ['nom', 'prenom'];

    public function livres(){
        return $this->hasMany(Livre::class);
    }
}
