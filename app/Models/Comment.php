<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'status'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);


        // belongsTo(RelatedModel, foreignKey = post_id, localKey = id)
    }

   
}
