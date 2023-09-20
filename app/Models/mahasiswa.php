<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    protected $table = "mahasiswa";
    protected $fillable=
    ['nim_mhs',
    'nama_mhs',
    'ttl_mhs',
    'alamat_mhs',
    'telpon_mhs',
    'email_mhs',
    'kota_mhs',
    'agama_mhs',
    'gambar'];
}
