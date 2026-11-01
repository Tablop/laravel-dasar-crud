<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "tb_produk";
    protected $guarded = ["id_produk"];
    protected $primaryKey = "id_produk";
    public $timestamps = false;

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, "kategori_id", "id_kategori");
    }
}
