<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Jenis;
use App\Models\Cuti;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::truncate();
        User::create([
            'id_kantor' => '9999',
            'name' => 'Admin Aplikasi',
            'email' => 'admin@gmail.com',
            'is_admin' => '1',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'id_kantor' => '123',
            'name' => 'NANDEX',
            'email' => 'n@gmail.com',
            'is_admin' => '0',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60),
        ]);

        Jenis::create([
            'name' => 'Bulanan'
        ]);
        Jenis::create([
            'name' => 'Tahunan'
        ]);

      
    }
}
