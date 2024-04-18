<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mapelGuru extends Model
{
    use HasFactory,HasUuids;

    protected $fillable = ['idGuru', 'idMapel','idPeriode'];
    protected $primaryKey = 'idMapelGuru';
    protected $keyType = 'string';

    public function periode()
    {
        return $this->belongsTo(Periode::class, 'idPeriode');
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'idGuru');
    }

    public function mapel() {
        return $this->belongsTo(mapel::class, 'idMapel');
    }


}
