<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kategori::all();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                "nama_kategori" => "required|string|min:1",
                "deskripsi" => "required|string|min:10",
            ],
            [
                "nama_kategori.required" => "nama_kategori harus diisi",
                "nama_kategori.string" => "nama_kategori harus berupa string",
                "nama_kategori.min" =>
                    "nama_kategori harus diisi minimal 1 huruf",

                "deskripsi.required" => "deskripsi harus diisi",
                "deskripsi.string" => "deskripsi harus berupa string",
                "deskripsi.min" => "deskripsi harus diisi minimal 10 karakter",
            ],
        );

        Kategori::create($validate);

        return response()->json(["berhasil" => true], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Kategori::find($id);
        if (!$data) {
            return response()->json(["message" => "Tidak ditemukan"], 404);
        }
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate(
            [
                "nama_kategori" => "required|string|min:1",
                "deskripsi" => "required|string|min:10",
            ],
            [
                "nama_kategori.required" => "nama_kategori harus diisi",
                "nama_kategori.string" => "nama_kategori harus berupa string",
                "nama_kategori.min" =>
                    "nama_kategori harus diisi minimal 1 huruf",

                "deskripsi.required" => "deskripsi harus diisi",
                "deskripsi.string" => "deskripsi harus berupa string",
                "deskripsi.min" => "deskripsi harus diisi minimal 10 karakter",
            ],
        );
        $data = Kategori::find($id);
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
        $data = Kategori::find($id);
        if (!$data) {
            return response()->json(["message" => "Tidak Ditemukan"], 404);
        }
        $data->delete();
        return response()->json(["message" => "berhasil"], 200);
    }
}
