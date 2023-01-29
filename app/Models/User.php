<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role_id',
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function disposisi()
    {
        return $this->belongsTo(Disposisi::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function getNameRole()
    {
        $user = Auth::user();
        $role = Role::findOrFail($user->role_id);

        return $role->nama;
    }

    public function sueratKeluar()
    {
        return $this->belongsTo(SuratKeluar::class);
    }

    public function suratMasuk()
    {
        return $this->belongsTo(SuratMasuk::class);
    }
}
