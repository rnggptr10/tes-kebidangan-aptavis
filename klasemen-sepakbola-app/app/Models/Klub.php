<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klub extends Model
{
    use HasFactory;
    protected $table = 'klub';
    protected $fillable = [
        'name', 'city', 'ma', 'me', 's', 'k', 'gm', 'gk', 'point'
    ];
}
