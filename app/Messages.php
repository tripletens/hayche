<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    //
    protected $table = 'messages';
    //Primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamps = true;
    protected $fillable = [
        'sender_id','receiver_id','title','message',
        'reply'
    ];
}
