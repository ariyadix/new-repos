<?php

namespace App\Models\Lkps;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Reratadtpr extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    protected $table = 'reratadtpr';
    protected $fillable = [
        'nm_dosen',
        'sks_pss',
        'skd_psl_pts',
        'skd_ptl',
        'skd_penelitian',
        'skd_pengmas',
        'sksmen_pts',
        'sksmen_ptl',
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
