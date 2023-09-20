<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tugas extends Model
{
    use HasFactory;
    protected $table ="tugas";
    protected $fillable=
    ['kanal_tv',
    'lembaga_tv',
    'udara_tv',
    'wilayah_tv',
    'alamat_tv'];
}
