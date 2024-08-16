<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $primaryKey = 'post_id';

    protected $fillable = [
        'title',
        'content',
        'publish_date',
        'author_id',
    ];

    protected $casts = [
        'publish_date' => 'date',
    ];

    public function author(){
        return $this->belongsTo(Author::class, 'author_id');
    }
}
