<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class periode extends Model
{
    use HasFactory,HasUuids;

    protected $fillable = ['tahunPeriode','semester'];

    protected $primaryKey = 'idPeriode';
    protected $keyType = 'string';

    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'idPeriode');
    }

}
