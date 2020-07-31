<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    //
    protected $table = 'applications';
    //Primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamps = true;

    protected $fillable = [
     'user_id', 'email', 'mobile_phone', 'whatsapp_phone',
     'dob', 'nationality', 'passport', 'cv', 'qualification',
      'experience', 'skills', 'refer', 'refer_others', 'post_id',
       'post_title', 'employer_id', 'employer_message', 'employer_name',
    'created_at', 'updated_at', 'refer1', 'refer2', 'refer3',
     'refer4', 'refer5', 'refer6'];
    public function users(){
        return $this->belongsTo('App/User','user_id','id');
    }


}
