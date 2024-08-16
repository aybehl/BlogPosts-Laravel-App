<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
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
