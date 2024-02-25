<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JamPelajaran extends Model
{
    use HasFactory,HasUuids;

    protected $fillable = ['jam'];

    protected $primaryKey = 'idJam';
    protected $keyType = 'string';


}
