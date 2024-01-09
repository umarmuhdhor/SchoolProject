<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = ['judulBerita', 'sinopsis', 'isiBerita','foto'];
    protected $primaryKey = 'idBerita';
    protected $keyType = 'string';
}
