<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recipe extends Model
{
     protected $table='recipe';
    protected $fillable=['name','duration','ingredients','recipe','rimage'];
    protected $PrimaryKey='id';
}
