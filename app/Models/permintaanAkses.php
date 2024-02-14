<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permintaanAkses extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['idMurid', 'idLatihan', 'status','alasan'];
    protected $primaryKey = 'idPermintaan'; // Gantilah 'id' dengan nama kolom UUID Anda
    protected $keyType = 'string';
}
