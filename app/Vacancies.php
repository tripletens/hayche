<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancies extends Model
{
    protected $table = 'vacancies';
    //Primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamps = true;

    protected $fillable = [
        'employer_id', 'employer_name', 'employer_about',
        'empoyer_logo', 'employer_address', 'employer_state',
         'employer_country', 'post_title',
        'post_description', 'status',
        'created_at', 'updated_at', 'staff_no', 'department'
    ];
    // public function users()
    // {
    //     return $this->belongsTo('App/User', 'user_id', 'id');
    // }
}
