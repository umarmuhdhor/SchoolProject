<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelasmurid extends Model
{
    use HasFactory,HasUuids;

    protected $fillable = ['idKelas', 'idMurid','status'];
    protected $primaryKey = 'idKelasMurid';
    protected $keyType = 'string';

}
