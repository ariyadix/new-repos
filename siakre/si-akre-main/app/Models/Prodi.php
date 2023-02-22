<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Prodi extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $table = 'prodi';
    protected $fillable = [
        'nama',
        'email'
    ];


    public function getProdiID()
    {
        return sprintf('PR%03d', $this->id);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function dosen()
    {
        return $this->hasMany(Dosen::class);
    }
    public function led()
    {
        return $this->hasMany(Led::class);
    }
    public function isComplete()
    {
        return true;
    }
}
