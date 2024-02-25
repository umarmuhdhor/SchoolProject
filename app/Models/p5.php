<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P5 extends Model
{
    use HasFactory;

    protected $fillable = ['judul','isi', 'tanggal', 'foto1', 'foto2', 'foto3', 'foto4', 'foto5'];
}
