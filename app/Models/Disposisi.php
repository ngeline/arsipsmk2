<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    use HasFactory;

    protected $table = 'disposisis';

    protected $fillable = ['surat_masuk_id', 'sifat_surat', 'catatan', 'user_id'];

    public function suratMasuk()
    {
        return $this->belongsTo(SuratMasuk::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
