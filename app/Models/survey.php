<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class survey extends Model
{
    use HasFactory;

    protected $fillable =[
        'first_name',
        'last_name',
        'main_reason',
        'avg_bill',
        'own_home',
        'zip_code',
        'email',
        'phone',
        'income',
        'credit_score',
        'home_type',
        'address',
        'state',
        'electric_provider',
        'roof_shade',
        'trim_trees',
        'is_qualify',
        'email_status',
        'company'
    ];


     public function utility(){
         return $this->hasOne(Utility_names::class,'id','electric_provider');
     }
}
