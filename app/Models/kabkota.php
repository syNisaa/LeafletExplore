<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Kabkota extends Model
{
    protected $table = 'kabkota';
    protected $fillable =['name', 'alt_name', 'latitude', 'longitude','id_provinsi'];

    function provinsi(){
        return $this->belongsTo(provinsi::class);
    }
}
