<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class KepalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['identitas' => '222222'], // cari berdasarkan identitas
            [
                'nama' => 'Dosen',
                'email' => 'dosen@gmail.com',
                'role' => 'kepala', // bisa diganti jika peran bukan admin
                'alamat' => 'Ambon',
                'password' => Hash::make('Spiderman19_'),
                'updated_at' => now(),
            ]
        );
    }
}
