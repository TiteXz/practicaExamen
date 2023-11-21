<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    // protected $table = 'coches';
    protected $fillable = ['nombre', 'marca', 'precio', 'color'];

    public $timestamps = false;
}
