<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['jabatan', 'tahunMenjabat', 'status', 'idGuru'];
    protected $primaryKey = 'idJabatan';
    protected $keyType = 'string';

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'idGuru');
    }
}
