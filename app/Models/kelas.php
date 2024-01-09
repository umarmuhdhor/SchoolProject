<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = ['namaKelas', 'tingkat','idGuru', 'idPeriode'];
    protected $primaryKey = 'idKelas';
    protected $keyType = 'string';

}
