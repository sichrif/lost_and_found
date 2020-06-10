<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    public function post(){
        return $this->belongsTo(post::class);
    }
}
