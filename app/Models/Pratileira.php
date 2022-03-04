<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pratileira extends Model
{
    use HasFactory;
    protected $fillable = [
        'numeracao',
        'fileira',
    ];
}
