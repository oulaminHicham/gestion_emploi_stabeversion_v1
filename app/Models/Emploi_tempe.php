<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploi_tempe extends Model
{
    use HasFactory;
    protected $fillable = ['descreption' , 'joure','horaire','salle_id','groupe_id','module_id'];
    //
    public function groupe(){
        return $this->belongsTo(Groupe::class);
    }
    //
    public function salle(){
        return $this->belongsTo(Salle::class);
    }
    //
    public function module(){
        return $this->belongsTo(Module::class);
    }
    //

 
}
