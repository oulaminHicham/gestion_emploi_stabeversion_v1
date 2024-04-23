<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Groupe extends Model
{
    use HasFactory;
    protected $fillable= ['specialite','nom' ,'filiere_id'];
    //
    public function filiere(){
        return $this->belongsTo(Filiere::class);
    }
    //
    public function emplois(){
        return $this-> hasMany(Emploi_tempe::class);
    }
    //
    public function etudients(){
        return $this->hasMany(Etudient::class);
    }
}
