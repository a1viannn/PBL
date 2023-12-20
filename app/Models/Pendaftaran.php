<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $table = 'pendaftarans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama',
        'nim',
        'prodi',
        'email',
        'no_telp',
        'cv',
        'divisi_1',
        'divisi_2',
        'status',
        'jabatan',
    ];

    public function divisi1()
    {
        return $this->belongsTo(Divisi::class, 'divisi_1');
    }

    public function divisi2()
    {
        return $this->belongsTo(Divisi::class, 'divisi_2');
    }
}
