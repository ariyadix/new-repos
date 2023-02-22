<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Dosen extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    protected $table = 'dosen';
    protected $fillable = [
        'nama',
        'nip',
        'tgl_lahir',
        'tmp_lahir',
        'alamat',
        'img_url',
        'prodi_id',
    ];
    public function getDosenID()
    {
        return sprintf('DOS%03d', $this->id);
    }

    public function user()
    {
        return $this->hasOne(User::class, 'dosen_id');
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
