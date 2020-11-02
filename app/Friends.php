<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    /**
     * @var string
     */
    protected $table = 'user_friend';

    /**
     * @var string[]
     */
    protected $fillable = ['user_id', 'friends_id', 'accepted'];
}
