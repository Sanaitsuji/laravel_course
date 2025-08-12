<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    // Define the relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id');
    }

    function image() {
        return $this->morphOne(Image::class, 'imageable');
    }

}
