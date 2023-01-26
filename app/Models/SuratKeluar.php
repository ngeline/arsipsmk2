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
        'jumlah_lampiran',
        'file_surat',
        'perihal_surat',
        'tanggal_input',
        'kode_simpan',
        'isi_ringkasan',
        'tanggal_rapat',
        'waktu_rapat',
        'lokasi',
    ];
}
