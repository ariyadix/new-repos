<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Reviewer extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $table = 'reviewer';
    protected $fillable = [
        'nama',
        'instansi',
        'rev_id',
        'tgl_lahir',
        'tmp_lahir',
        'alamat',
        'img_url',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'rev_id');
    }

    public function isComplete()
    {
        return true;
    }
}
