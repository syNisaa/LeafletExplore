<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Bali extends Model
{
    protected $table = 'bali';
    protected $fillable =['nama', 'latitude', 'longitude' ,'luas','jumlah_penduduk','kepadatan','tempat_wisata','jumlah_wisata','type_polygon','polygon'];

}