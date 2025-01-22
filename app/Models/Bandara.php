<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Bandara extends Model
{
    protected $table = 'bandara';
    protected $fillable =['nama', 'latitude', 'longitude' ,'provinsi'];

}