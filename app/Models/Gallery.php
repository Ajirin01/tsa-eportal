<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = [
    'title', 'description', 'photo', 'gallery_category_id'
    ];

    public function category(){
        return $this->belongsTo('App\Models\GalleryCategory');
    }
}
