<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Subsektor extends Model
{
    use HasFactory, HasUlids;

    protected $casts = ['id' => 'string', 'icon' => 'array'];
    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'icon'
    ];
}
