<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class merk extends Model
{
    use HasFactory;
    protected $table = "merk";
    protected $fillable=
    ['produk_tv',
    'asal_tv',
    'harga_tv',
    'ukuran_tv',
    'kualitas_tv'];
}
