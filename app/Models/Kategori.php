<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "tb_kategori";
    protected $guarded = ["id_kategori"];
    protected $primaryKey = "id_kategori";
    public $timestamps = false;

    public function produk()
    {
        return $this->hasMany(Produk::class,);
    }
}
