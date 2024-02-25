<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = ['kelas', 'mataPelajaran'];
    protected $primaryKey = 'idMapel'; // Gantilah 'id' dengan nama kolom UUID Anda
    protected $keyType = 'string';




}
