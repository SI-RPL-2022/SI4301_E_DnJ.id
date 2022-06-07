<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    protected $primaryKey = 'id';
    protected $table = "pembayaran_donasi";
    public $timestamps = false;
    protected $fillable = [
        'id',
        'id_donasi', 
        'id_donatur', 
        'nama_donatur',
        'nominal',
        'metode_pembayaran',
        'status',
        'bukti_pembayaran',
        'tanggal_pembayaran'

        
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'id_donatur');
    }

    public function donasi()
    {
        return $this->belongsTo(Donations::class,'id_donasi');
    }


}
