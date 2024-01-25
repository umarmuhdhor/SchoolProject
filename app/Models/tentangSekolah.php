<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tentangsekolah extends Model
{
    use HasFactory,HasUuids;

    protected $fillable = ['namaSekolah','alamat','kelurahan','kecamatan','kota','provinsi','kodePos','nomorTelpon','email','tahunBerdiiri','akredetasi'];

    protected $primaryKey = 'idSekolah';
    protected $keyType = 'string';

}
