<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    //
    protected $table = 'reviews';
    //Primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamps = true;

    protected $fillable = [
        'user_id', 'nickname', 'incident_type',
        'incident_others', 'physical_violence',
        'food_poisoning_restaurant', 'food_poisoning_agency',
        'action_taken',
    ];
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
