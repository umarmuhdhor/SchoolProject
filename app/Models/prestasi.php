<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestasi extends Model
{
    use HasFactory,HasUuids;

    protected $fillable = ['judul','deskripsi','foto','idMurid'];

    protected $primaryKey = 'idPrestasi';
    protected $keyType = 'string';

}
