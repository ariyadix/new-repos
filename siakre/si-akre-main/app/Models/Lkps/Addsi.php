<?php

namespace App\Models\Lkps;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Addsi extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    protected $table = 'addsi';
    protected $fillable = [
        'jns_data',
        'sppdd_sm',
        'sppdd_komtj',
        'sppdd_komlan',
        'sppdd_komwan',
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
