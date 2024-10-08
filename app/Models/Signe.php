<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signe extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'poids',
        'temperature',
        'tension',
        'taille',
        'user_id'
    ];
}
