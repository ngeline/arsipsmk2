<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use HasFactory;

    protected $table = 'surat_keluars';

    protected $fillable = [
        'kepada',
        'alamat',
        'nomor_surat',
        'tanggal_surat',
        'dokumen',
        'perihal_surat',
        'tanggal_input',
        'kode_simpan',
        'keterangan',
        'user_id'
    ];

    protected $guard = [];

    public function disposisi()
    {
        return $this->belongsTo(Disposisi::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
