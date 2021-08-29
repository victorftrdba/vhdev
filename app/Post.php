<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use App\Models\User;


class Post extends Model
{
    use Translatable;

    protected $fillable = [
        'title',
        'body',
        'excerpt',
        'slug',
        'created_at'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}