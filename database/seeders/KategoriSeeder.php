<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tb_kategori")->insert([
            [
                "nama_kategori" => "Hiburan",
                "deskripsi" => "Produk untuk kebutuhan hiburan."
            ],
            [
                "nama_kategori" => "Elektronik",
                "deskripsi" => "Berbagai perangkat elektronik."
            ],
            [
                "nama_kategori" => "Aksesoris",
                "deskripsi" => "Aksesoris untuk perangkat elektronik."
            ],
            [
                "nama_kategori" => "Peralatan Rumah",
                "deskripsi" => "Peralatan untuk kebutuhan rumah tangga."
            ],
            [
                "nama_kategori" => "Olahraga",
                "deskripsi" => "Peralatan untuk aktivitas olahraga."
            ],
        ]);
    }
}
