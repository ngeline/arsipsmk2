<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;

    protected $table = 'surat_masuks';

    protected $fillable = [
        'dari',
        'alamat',
        'nomor_surat',
        'tanggal_surat',
        'dokumen',
        'perihal_surat',
        'tanggal_input',
        'kode_simpan',
        'keterangan',
    ];

    protected $guard = [];

    public function disposisi()
    {
        return $this->hasOne(Disposisi::class, 'surat_masuk_id', 'id');
    }
}
