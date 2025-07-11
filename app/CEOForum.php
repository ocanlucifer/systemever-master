<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CEOForum extends Model
{
    protected $table = 'ceo_forums';

    use SoftDeletes;
}
