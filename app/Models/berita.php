<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = ['judulBerita', 'sinopsis', 'isiBerita','thumbnail','tanggal','foto1','foto2','foto3','foto4','foto5'];
    protected $primaryKey = 'idBerita';
    protected $keyType = 'string';
}
