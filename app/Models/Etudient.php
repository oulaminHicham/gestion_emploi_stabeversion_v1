<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudient extends Model
{
    use HasFactory;
    protected $fillable = ['nom' , 'prenom' , 'cin' , 'groupe_id' , 'dateNaissance' , 'lieuNaissance' , 'num_massare' , 'apogee'];
    //
    public function groupe(){
        return $this->belongsTo(Groupe::class);
    }
}
