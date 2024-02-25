<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory,HasUuids;

    protected $fillable = ['buktiKelulusan', 'status','namaKampus','tempatKerja','idMurid'];
    protected $primaryKey = 'idAlumni';
    protected $keyType = 'string';

    public function murid()
    {
        return $this->belongsTo(murid::class, 'idMurid');
    }
}
