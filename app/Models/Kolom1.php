<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kolom1 extends Model
{
    protected $table='kolom1';
    protected $fillable = [
        'nama',
        'foto' 
    ];
}
