<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title','body','published',
    ];

    public static function published()
    {
        return self::where('published',1)->get();
    }    

    public static function drafts()
    {
        return self::where('published',0)->get();
    }    

    public function comments(){
        return $this->hasMany(Comment::class);
    }


// protected $guarded = [
    //     'id'
    // ];
}
