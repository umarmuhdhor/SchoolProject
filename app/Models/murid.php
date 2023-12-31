<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class murid extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['nama', 'tempatLahir', 'tanggalLahir', 'jk', 'agama', 'noHp', 'alamat', 'tanggalPenerimaan', 'foto', 'idAkun'];
    protected $primaryKey = 'idMurid';
    protected $keyType = 'string';

    public function akun()
    {
        return $this->belongsTo(User::class);
    }
}
