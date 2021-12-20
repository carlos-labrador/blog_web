<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'body',
        'published_at',
        'slug',
        'user_id',
    ];

    /**
     * Typecasting is awesome.
     *
     * @var array
     */
    protected $casts = [
        'published_at' => 'datetime:Y-m-d',
    ];

    /**
     * Always generate the blog url when it is updated.
     *
     * @param $value
     * @return string
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($this->attributes['title']);
    }

    /**
     * Get the owner of the post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
