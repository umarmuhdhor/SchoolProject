<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kegiatanekskul extends Model
{
    use HasFactory;

    protected $fillable = ['id','judulKegiatan', 'ringkasan', 'isiKegiatan','tanggal','foto1','foto2','foto3','foto4','foto5','idEkskul'];
}
