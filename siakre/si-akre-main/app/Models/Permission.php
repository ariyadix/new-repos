<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $table = 'permission';

    protected $casts = [
        'access' => 'array'
    ];
    protected $fillable = [
        'id',
        'access',
    ];
}
