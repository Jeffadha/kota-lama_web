<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
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
        User::create([
            'name' => 'Admin',
            'email' => 'local@admin.com',
            'password' => Hash::make('admin123'),
        ]);
        About::create([
            'description' => 'Terletak 18 km ke arah selatan Alun-alun dari Purwokerto. Alun-alun merupakan salah satu penanda pusat pemerintahan di Jawa, selain Pendopo Kabupaten dan Masjid Agung. Di sebelah barat Alun-alun terdapat Masjid Nur Sulaiman, di utara adalah Pendopo Duplikat Si Panji, dan sebelah timur adalah Lembaga Pemasyarakat Banyumas. Biasanya di pinggir dan tengah kompleks Alun-alun ditanami pohon beringin yang melambangkan pengayoman kepada rakyat.',
            'wa' => '11122223333',
            'image' => 'landscape_kota_lama_banyumas.png'
        ]);
    }
}