<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class vaca extends Model
{
    protected $fillable = ['nombre', 'raza', 'origen', 'fecha_inc', 'fecha_nac', 'edad', 'estatus'];
}
