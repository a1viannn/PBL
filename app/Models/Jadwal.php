<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwals';
    protected $primaryKey = "id";

    public function divisi()
    {
        return $this->belongsTo('App\Models\Divisi');
    }
}
