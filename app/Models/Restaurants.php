<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurants extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        'owner_name',
        'owner_email',
        'owner_phone',
        'restaurant_name',
        'restaurant_logo',
        'restaurant_address',
        'restaurant_house_number',
        'restaurant_city',
        'restaurant_postal_code',
        'google_reviews_link',
        'menu_link',
        'validation_code',
        'scratch_img',
        'background_img',
        'color',
        'status',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function working_hours(){
        return $this->belongsTo(WorkingHour::class,'id','restaurant_id');
    }

    public function quiz(){
        return $this->belongsTo(Quiz::class,'id','restaurant_id');
    }

    public function quiz_pivot(){
        return $this->hasMany(RestaurantQuiz::class,'restaurant_id','id');
    }

}
