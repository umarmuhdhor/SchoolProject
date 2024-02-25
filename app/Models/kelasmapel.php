<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelasmapel extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['idKelas', 'idMapelGuru'];
    protected $primaryKey = 'idKelasMapel';
    protected $keyType = 'string';

    public function mapelguru()
    {
        return $this->belongsTo(MapelGuru::class, 'idMapelGuru');
    }

    public function periode()
    {
        return $this->belongsTo(Periode::class, 'idMapelGuru', 'idPeriode');
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'idMapelGuru', 'idMapel');
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'idMapelGuru', 'idGuru');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'idKelas');
    }
}
