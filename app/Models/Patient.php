<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'postnom',
        'prenom',
        'profession',
        'date_naissance',
        'nationalite',
        'age',
        'etat_civil',
        'sexe',
        'num_partenaire',
        'email'
    ];
}
