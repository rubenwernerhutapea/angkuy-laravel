<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Angkot extends Model
{
    use SoftDeletes;

    public $table = "angkot";

    protected $fillable = [
        'user_id', 'nama', 'nomor', 'gambar', 'jurusan', 'warna', 'harga', 'waktu', 'deskripsi', 'map', 'slug'
    ];

    protected $hidden = [

    ];

    public function user() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
