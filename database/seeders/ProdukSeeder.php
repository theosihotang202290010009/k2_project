<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert([
            'nama_pdk' => 'Better Sugar',
            'harga' => '25000',
            'gambar' => '1621486403_butter-sugar.jpg'
        ]);

        DB::table('produks')->insert([
            'nama_pdk' => 'Roti Bluder',
            'harga' => '16000',
            'gambar' => 'roti bluder.jpg'
        ]);

        DB::table('produks')->insert([
            'nama_pdk' => 'roti gembong',
            'harga' => '19890',
            'gambar' => 'roti gembong.jpg'
        ]);

        DB::table('produks')->insert([
            'nama_pdk' => 'Sari Roti Coklat Keju',
            'harga' => '5500',
            'gambar' => 'sari roti coklat keju.png'
        ]);

        DB::table('produks')->insert([
            'nama_pdk' => 'Roti Tawar Gandum',
            'harga' => '17000',
            'gambar' => 'roti tawar gandum.png'
        ]);

        DB::table('produks')->insert([
            'nama_pdk' => 'Roti Mix (Promo)',
            'harga' => '89000',
            'gambar' => 'promo.png'
        ]);

        DB::table('produks')->insert([
            'nama_pdk' => 'Roti Mix 2 (Promo)',
            'harga' => '85000',
            'gambar' => 'roti mix 2.png'
        ]);

        DB::table('produks')->insert([
            'nama_pdk' => 'Roti Mix 3(Promo)',
            'harga' => '99900',
            'gambar' => 'roti mix 3.png'
        ]);

        DB::table('produks')->insert([
            'nama_pdk' => 'Roti Mix 4(Promo)',
            'harga' => '99000',
            'gambar' => 'roti mix 4.png'
        ]);

        DB::table('produks')->insert([
            'nama_pdk' => 'Roti Mix 5(Promo)',
            'harga' => '120000',
            'gambar' => 'roti mix 5.png'
        ]);
        }
}
