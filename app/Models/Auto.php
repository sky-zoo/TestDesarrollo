<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;
    public $timestamps = false; // Con esta linea Eloquent no usa las columnas create_at y updated_at
}
