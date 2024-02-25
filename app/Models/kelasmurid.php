<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelasmurid extends Model
{
    use HasFactory,HasUuids;

    protected $fillable = ['idKelas', 'idMurid','status'];
    protected $primaryKey = 'idKelasMurid';
    protected $keyType = 'string';

}
