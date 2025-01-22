<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Gunung extends Model
{
    protected $table = 'gunung_aktifs';
    protected $fillable =['nama', 'latitude', 'longitude' ,'tinggi_meter','estimasi_letusan_terakhir'];

}