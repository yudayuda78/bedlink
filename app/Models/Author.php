<?php

namespace App\Models;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'position', 'avatar'];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
