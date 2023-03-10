<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    use HasFactory;

    protected $table = 'disposisis';

    protected $fillable = ['surat_masuk_id', 'sifat_surat_id', 'catatan', 'user_id', 'kepada'];

    public function suratMasuk()
    {
        return $this->belongsTo(SuratMasuk::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sifatSurat()
    {
        return $this->belongsTo(SifatSurat::class);
    }
}
