<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory,HasUuids;

    protected $fillable = ['judul', 'isiInformasi','tujuan','tanggal','file','foto1','foto2','foto3','foto4','foto5'];
    protected $primaryKey = 'idInformasi';
    protected $keyType = 'string';
}
