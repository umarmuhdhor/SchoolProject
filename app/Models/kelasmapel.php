<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kelasmapel extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['idKelas', 'idMapelGuru'];
    protected $primaryKey = 'idKelasMapel';
    protected $keyType = 'string';

    public function mapelguru()
    {
        return $this->belongsTo(mapelGuru::class, 'idMapelGuru');
    }

    public function periode()
    {
        return $this->belongsTo(periode::class, 'idMapelGuru', 'idPeriode');
    }

    public function mapel()
    {
        return $this->belongsTo(mapel::class, 'idMapelGuru', 'idMapel');
    }

    public function guru()
    {
        return $this->belongsTo(guru::class, 'idMapelGuru', 'idGuru');
    }

    public function kelas()
    {
        return $this->belongsTo(kelas::class, 'idKelas');
    }
}
