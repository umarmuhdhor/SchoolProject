<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ekskul extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['nama', 'status', 'deskripsi', 'idGuru', 'idMurid', 'foto', 'idPeriode'];
    protected $primaryKey = 'idEkskul';
    protected $keyType = 'string';

    public function guru() {
        return $this->belongsTo(Guru::class, 'idGuru');
    }

    public function periode() {
        return $this->belongsTo(Periode::class, 'idPeriode');
    }
}
