<?php

namespace App\Models\Lkps;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Mt extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    protected $table = 'mt';
    protected $fillable = [
        'tl',
        'jml_lus',
        'jml_lust',
        'rerata_tunggu',
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
