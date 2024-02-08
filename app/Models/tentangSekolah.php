<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tentangsekolah extends Model
{
    use HasFactory;

    protected $fillable = ['tentang','deskripsi'];

}
