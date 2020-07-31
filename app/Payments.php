<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    //
    protected $table = 'payment';
    //Primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamps = true;
    protected $fillable = [
        'position', 'department', 'qualification', 'amount',
    ];
}
