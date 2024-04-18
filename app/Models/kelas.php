<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = ['namaKelas', 'tingkat', 'idGuru', 'idPeriode'];
    protected $primaryKey = 'idKelas';
    protected $keyType = 'string';

    public function periode()
    {
        return $this->belongsTo(periode::class, 'idPeriode');
    }

    public function guru()
    {
        return $this->belongsTo(guru::class, 'idGuru');
    }

    // Relasi ke model Murid
    // Model Kelas
    public function murids()
    {
        return $this->belongsToMany(murid::class, 'kelasmurids', 'idKelas', 'idMurid')
            ->withPivot('idKelasMurid'); // Pastikan Anda memasukkan pivot key di sini
    }
}
