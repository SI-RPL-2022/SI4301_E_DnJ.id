<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donations extends Model
{
    protected $primaryKey = 'id';
    protected $table = "donations";
    public $timestamps = false;
    protected $fillable = [
        'id',
        'id_penggalang', 
        'nama_penggalang',
        'penerima_donasi',
        'nama_donasi',
        'deskripsi',
        'lokasi',
        'buka',
        'tutup',
        'target_donasi',
        'foto',
        'total_donasi',
        'status',
        'jumlah_donatur'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'id');
    }
    public function bayardonasi()
    {
        return $this->hasMany(pembayaran::class);
    }
}
