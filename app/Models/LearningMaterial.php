<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningMaterial extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'material'
    ];

    public function class(){
        return $this->belongsTo('App\Models\MyClass');
    }
}
