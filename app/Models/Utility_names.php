<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utility_names extends Model
{
    use HasFactory;

    protected $table = 'utility_names';

    protected $fillable = [
        'zip',
        'utility_name',
        'state'
    ];

}
