<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review_e extends Model
{
    //
    protected $table = 'review_e';
    //Primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamps = true;

    protected $fillable = [
        'name', 'city', 'type', 'pdf', 'image1',
        'image1_caption', 'image2', 'image2_caption',
         'image3', 'image3_caption',
    ];
}
