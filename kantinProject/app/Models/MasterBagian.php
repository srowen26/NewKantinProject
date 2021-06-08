<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterBagian extends Model
{
    use HasFactory;

    protected $table='master_bagian';

    protected $fillable = [
        'kode_bagian',
        'bagian',
        'lantai',
    ];
}
