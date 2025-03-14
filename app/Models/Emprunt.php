<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emprunt extends Model
{
    protected $table = 'emprunts';
    protected $fillable = ['date_emprunt', 'date_retour', 'livre_id'];

    public function livre(){
        return $this->belongsTo(Livre::class);
    }
}
