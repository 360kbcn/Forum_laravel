<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table= 'forum';

    protected $fillable = ['name', 'description'];

    public function posts()
    {
      return $this->hasMany(Post::class);
    }
}
