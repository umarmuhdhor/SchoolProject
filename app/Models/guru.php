<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['nama', 'noHp', 'email', 'mapel', 'deskripsi', 'jk', 'status', 'foto', 'idAkun'];
    protected $primaryKey = 'idGuru';
    protected $keyType = 'string';

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }

    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'idGuru');
    }

    public function akun()
    {
        return $this->belongsTo(User::class);
    }
}
