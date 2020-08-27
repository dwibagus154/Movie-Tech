<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'isi', 'isloved', 'user_id', 'film_id'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Film()
    {
        return $this->belongsTo(Film::class);
    }
}
