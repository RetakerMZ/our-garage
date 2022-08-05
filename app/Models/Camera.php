<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camera extends Model
{
    protected $table = 'cameras';

    protected $fillable = [
		'nama',
		'pixel',
        'battrey',
		'display',
        'optical_zoom',
        'memory',
		'harga',
        'gambar',
        'rent',
        'keterangan',
	];
}

