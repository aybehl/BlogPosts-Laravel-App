<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{   
    use HasFactory;
    protected $table = 'authors';
    protected $primaryKey = 'author_id';

    protected $fillable = [
        'author_name',
        'email',
    ];
    
    public function posts(){
        return $this->hasMany(Post::class, 'author_id');
    }
}
