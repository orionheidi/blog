<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $garded = ['id'];
 
    const STORE_RULES = [
        'author' => 'required | string',
        'text' => 'required | min:15'
    ];

    protected $fillable = [
        'post_id','author','text'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
