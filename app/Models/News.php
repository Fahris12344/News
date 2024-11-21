<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'content', 'category_id', 'start_date', 'end_date', 'image', 
    ];

    // Relasi dengan Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function likes()
{
    return $this->hasMany(Like::class);
}
public function comments()
{
    return $this->hasMany(Commentar::class);
}
}
