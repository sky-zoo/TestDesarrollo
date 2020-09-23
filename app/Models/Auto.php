<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;
    public $timestamps = false; // Le digo a Eloquent que no use las columnas create_at y updated_at
}
