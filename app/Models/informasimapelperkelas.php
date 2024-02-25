<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informasimapelperkelas extends Model
{
    use HasFactory,HasUuids;

    protected $fillable = ['judul', 'deskripsi', 'foto', 'link','jenis','idKelasMapel'];
    protected $primaryKey = 'idInformasi';
    protected $keyType = 'string';

    public function mapelguru()
    {
        return $this->belongsTo(mapelGuru::class, 'idMapelGuru');
    }

    public function mapel()
    {
        return $this->belongsTo(mapel::class, 'idMapelGuru' ,'idMapel');
    }


}
