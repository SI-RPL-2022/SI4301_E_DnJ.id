<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    protected $primaryKey = 'id';
    protected $table = "pelatihans";
    public $timestamps = false;
    protected $fillable = [
        'nama_pelatihan',
        'tanggal_start',
        'tanggal_end',
        'batas_daftar',
        'penyelenggara',
        'deskripsi',
        'tipe',
        'link',
        'alamat',
        'contact'
    ];
}
