<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // protected $table = 'tagovi';

    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
