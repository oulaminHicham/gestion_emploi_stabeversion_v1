<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Filiere extends Model
{
    use HasFactory;
    protected $fillable=['nom','descreption','groupe_id'];
}
