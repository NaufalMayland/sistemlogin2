<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $tabel = "kelas";
    protected $fillable = [
        'guru_id',
        'kelas',
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
