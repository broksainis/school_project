<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'category_id', 'user_id', 'photo_id', 'title', 'content'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function photo() {
        return $this->belongsTo('App\Photo'); //relation to photo
    }

    public function category() {
        return $this->belongsTo('App\Category'); //relation to category
    }

}
