<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $table = 'announcements';

    protected $fillable = [
        'title',
        'description', // Perbaikan ejaan dari 'descrition' ke 'description'
        'image',
        'date',
    ];
    
}
