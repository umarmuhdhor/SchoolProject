<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['jabatan', 'tahunMenjabat', 'status', 'idGuru'];
    protected $primaryKey = 'idJabatan';
    protected $keyType = 'string';

    public function guru()
    {
        return $this->belongsTo(guru::class, 'idGuru');
    }
}
