<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class utility_view extends Model
{
    public $table = "utility_view";
    use HasFactory;

    protected $fillable=[
        'utility_id',
        'utility_zip',
        'utility_name',
        'utility_state',
        'city_name',
        'state_code',
        'city_zip_code'
    ];
}
