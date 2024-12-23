<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'url', 'type', 'icon', 'microsite_id'];

    public function microsite()
    {
        return $this->belongsTo(Microsite::class);
    }
}
