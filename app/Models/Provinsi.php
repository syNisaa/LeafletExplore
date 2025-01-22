<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Provinsi extends Model
{
    protected $table = 'provinsi';
    protected $fillable =['name', 'alt_name', 'latitude', 'longitude'];

}
