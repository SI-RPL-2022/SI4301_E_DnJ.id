<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    protected $primaryKey = 'id';
    protected $table = "pekerjaans";
    public $timestamps = false;
    protected $fillable = [
        'nama_pekerjaan', 
        'tanggal_start',
        'perusahaan_perekrut',
        'deskripsi',
        'tipe',
        'kualifikasi',
        'alamat_perusahaan',
        'contact'
    ];
}
