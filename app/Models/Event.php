<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'photo', 'location', 'date', 'state'
    ];

    // public function category(){
    //     return $this->belongsTo('App\models\EventCategory');
    // }
}
