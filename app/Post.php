<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title','body','published','user_id'
    ];

    // protected $casts = [
    //     'published' => 'boolean'
    // ];

    public static function published()
    {
        // return self::where('published',1)->get();
        return self::where('published',true);
    }    

    public static function drafts()
    {
        return self::where('published',0)->get();
    }    

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function user(){
        // return $this->belongsTo('User');
        return $this->belongsTo(User::class,'user_id');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

// protected $guarded = [
    //     'id'
    // ];
}
