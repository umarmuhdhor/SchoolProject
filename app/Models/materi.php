<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materi extends Model
{
    use HasFactory,HasUuids;

    protected $fillable = ['idMateri','namaMateri','namaFile','deskripsi','file','idGuru','idMapel'];

    protected $primaryKey = 'idMateri';
    protected $keyType = 'string';
    public function mapel() {
        return $this->belongsTo(Mapel::class, 'idMapel');
    }

    public function guru() {
        return $this->belongsTo(Guru::class, 'idGuru');
    }
}
