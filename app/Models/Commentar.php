<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commentar extends Model
{
    protected $table = 'comments';
    protected $fillable = ['user_id', 'news_id', 'content'];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke News
    public function news()
    {
        return $this->belongsTo(News::class);
    }
}
