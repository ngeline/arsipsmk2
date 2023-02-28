<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\SifatSurat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // $role = new Role();
        // $role->create(['nama' => 'Admin']);
        // $role->create(['nama' => 'Siswa']);

        $sifatSurat = new SifatSurat();
        $sifatSurat->create(['nama' => 'Surat Rahasia']);
        $sifatSurat->create(['nama' => 'Surat Penting']);
        $sifatSurat->create(['nama' => 'Surat Terbatas']);

        // \App\Models\User::factory()->create([
        //     'role_id' => 1,
        //     'name' => 'Admin',
        //     'email' => 'admin@admin.com',
        //     'password' => Hash::make('admin')
        // ]);

        // \App\Models\User::factory()->create([
        //     'role_id' => 2,
        //     'name' => 'Siswa',
        //     'email' => 'siswa@siswa.com',
        //     'password' => Hash::make('siswa')
        // ]);
    }
}
