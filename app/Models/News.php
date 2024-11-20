<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = ['title', 'content', 'category_id', 'date'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
