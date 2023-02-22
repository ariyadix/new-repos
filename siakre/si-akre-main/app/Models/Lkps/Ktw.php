<?php

namespace App\Models\Lkps;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Ktw extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    protected $table = 'ktw';
    protected $fillable = [
        'ta',
        'jmd',
        'jml_6',
        'jml_5',
        'jml_4',
        'jml_3',
        'jml_2',
        'jml_1',
        'akhir_ts',
        'jl_ats',
        'rerata_masastudi',
        'jml_mhs',
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
