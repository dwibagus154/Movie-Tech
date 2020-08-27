<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'title', 'deskripsi', 'link'
    ];

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
