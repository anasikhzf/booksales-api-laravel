<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'description', 'cover_image_name', 'author_id', 'genre_id', 'price', 'stok'];

    public function author() {
        return $this->belongsTo(Author::class);
    }

    public function genre() {
        return $this->belongsTo(Genre::class);
    }
}
