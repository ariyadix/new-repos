<?php

namespace App\Models\Lkps;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Jcmb extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    protected $table = 'jcmb';
    protected $fillable = [
        'ta',
        'dy_tmpng',
        'jcm_pendftr',
        'jcm_lulus',
        'jmb_reg',
        'jmb_transfer',
        'jma_reg',
        'jma_transfer',
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
