<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Produk::with("kategori")
            ->get()
            ->map(
                fn($produk) => [
                    ...$produk->toArray(),
                    "kategori" => $produk->kategori->nama_kategori,
                ],
            );
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                "nama_produk" => "required|string|min:1",
                "harga" => "required|integer|min:0",
                "deskripsi_produk" => "required|string|min:10",
                "kategori_id" => "required|exists:tb_kategori,id_kategori",
            ],
            [
                "nama_produk.required" => "nama_produk harus diisi",
                "nama_produk.string" => "nama_produk harus berupa string",
                "nama_produk.min" => "nama_produk harus diisi minimal 1 huruf",

                "harga.required" => "harga harus diisi",
                "harga.integer" => "harga harus berupa integer",
                "harga.min" => "harga harus diisi minimal 0",

                "deskripsi_produk.required" => "deskripsi_produk harus diisi",
                "deskripsi_produk.string" =>
                    "deskripsi_produk harus berupa string",
                "deskripsi_produk.min" =>
                    "deskripsi_produk harus diisi minimal 10 karakter",

                "kategori_id.required" => "kategori_id harus diisi",
                "kategori_id.exists" => "kategori tidak terdaftar",
            ],
        );

        Produk::create($validate);

        return response()->json(["berhasil" => true], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Produk::with("kategori")->find($id);
        if (!$data) {
            return response()->json(["message" => "Tidak ditemukan"], 404);
        }
        $data = [
            ...$data->toArray(),
            "kategori" => $data->kategori->nama_kategori,
        ];
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate(
            [
                "nama_produk" => "required|string|min:1",
                "harga" => "required|integer|min:0",
                "deskripsi_produk" => "required|string|min:10",
                "kategori_id" => "required|exists:tb_kategori,id_kategori",
            ],
            [
                "nama_produk.required" => "nama_produk harus diisi",
                "nama_produk.string" => "nama_produk harus berupa string",
                "nama_produk.min" => "nama_produk harus diisi minimal 1 huruf",

                "harga.required" => "harga harus diisi",
                "harga.integer" => "harga harus berupa integer",
                "harga.min" => "harga harus diisi minimal 0",

                "deskripsi_produk.required" => "deskripsi_produk harus diisi",
                "deskripsi_produk.string" =>
                    "deskripsi_produk harus berupa string",
                "deskripsi_produk.min" =>
                    "deskripsi_produk harus diisi minimal 10 karakter",

                "kategori_id.required" => "kategori_id harus diisi",
                "kategori_id.exists" => "kategori tidak terdaftar",
            ],
        );
        $data = Produk::find($id);
        if (!$data) {
            return response()->json(["message" => "Tidak Ditemukan"], 404);
        }

        $data->update($validate);
        return response()->json(["message" => "Berhasil"], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Produk::find($id);
        if (!$data) {
            return response()->json(["message" => "Tidak Ditemukan"], 404);
        }
        $data->delete();
        return response()->json(["message" => "berhasil"], 200);
    }
}
