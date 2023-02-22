<?php

namespace App\Models\Lkps;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Ktk extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    protected $table = 'ktk';
    protected $fillable = [
        'jtk',
        'jtk_s3',
        'jtk_s2',
        'jtk_s1',
        'jtk_d4',
        'jtk_d3',
        'jtk_d2',
        'jtk_d1',
        'jtk_sm',
        'uk',
        'prodi_id',
    ];

    protected $auditExclude = [
        'id',
    ];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
}
