<?php

namespace App\Models\Lkps;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Kbkl extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    protected $table = 'Kbkl';
    protected $fillable = [
        'tl',
        'jml_lus',
        'lus_trlck',
        'prfsi_infokom',
        'prfsi_non_info',
        'ltk_multi',
        'ltk_nas',
        'ltk_wir',
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
