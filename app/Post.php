<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $table = 'post';

    use SoftDeletes;

    public function category()
    {
        return $this->belongsTo(PostMeta::class, 'post_id');
    }
}
