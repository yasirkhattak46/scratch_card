<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gr_data extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'email',
        'email_status'
    ];
}
