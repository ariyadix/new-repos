<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Mahasiswa extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $table = 'mahasiswa';
    protected $fillable = [
        'nama',
        'nim',
        'tgl_lahir',
        'tmp_lahir',
        'alamat',
        'img_url',
        'prodi_id',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'mhs_id');
    }
    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
    public function isComplete()
    {
        return true;
    }
}
