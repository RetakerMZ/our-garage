<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BikeType extends Model
{
    protected $table = 'bike_types';

    protected $fillable = [
		'gambar',
		'tipe_motor',
	];
}
