<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tb_produk")->insert([
            [
                "nama_produk" => "Smart TV Samsung 43 Inch",
                "harga" => 4500000,
                "deskripsi_produk" =>
                    "Smart TV dengan resolusi Full HD dan fitur Smart Hub.",
                "kategori_id" => 1,
            ],
            [
                "nama_produk" => "PlayStation 5",
                "harga" => 8500000,
                "deskripsi_produk" =>
                    "Konsol game generasi terbaru untuk hiburan.",
                "kategori_id" => 1,
            ],
            [
                "nama_produk" => "Laptop ASUS VivoBook",
                "harga" => 7500000,
                "deskripsi_produk" =>
                    "Laptop untuk kebutuhan belajar dan pekerjaan.",
                "kategori_id" => 2,
            ],
            [
                "nama_produk" => "Smartphone Samsung A15",
                "harga" => 2500000,
                "deskripsi_produk" =>
                    "Smartphone dengan layar AMOLED dan kamera berkualitas.",
                "kategori_id" => 2,
            ],
            [
                "nama_produk" => "Mouse Logitech G102",
                "harga" => 250000,
                "deskripsi_produk" =>
                    "Mouse gaming dengan sensor presisi tinggi.",
                "kategori_id" => 3,
            ],
            [
                "nama_produk" => "Keyboard Mechanical",
                "harga" => 450000,
                "deskripsi_produk" =>
                    "Keyboard mechanical dengan RGB lighting.",
                "kategori_id" => 3,
            ],
            [
                "nama_produk" => "Kipas Angin Miyako",
                "harga" => 350000,
                "deskripsi_produk" =>
                    "Kipas angin untuk kebutuhan rumah tangga.",
                "kategori_id" => 4,
            ],
            [
                "nama_produk" => "Rice Cooker Philips",
                "harga" => 600000,
                "deskripsi_produk" =>
                    "Penanak nasi elektrik dengan kapasitas 1.8 liter.",
                "kategori_id" => 4,
            ],
            [
                "nama_produk" => "Sepatu Running",
                "harga" => 550000,
                "deskripsi_produk" =>
                    "Sepatu olahraga untuk aktivitas berlari.",
                "kategori_id" => 5,
            ],
            [
                "nama_produk" => "Dumbbell 5 KG",
                "harga" => 180000,
                "deskripsi_produk" =>
                    "Alat latihan beban untuk olahraga di rumah.",
                "kategori_id" => 5,
            ],
        ]);
    }
}
