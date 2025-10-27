<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class upVideo extends Model
{
    protected $fillable = ['title'  , 'vidio' , 'user_id'];

    protected function user()
    {
        return $this->belongsTo(User::class);
    }
}
