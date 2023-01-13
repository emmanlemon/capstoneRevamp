<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;
    protected $table = 'achievements';
    public $timestamps = true;
    protected $fillable = [
        'name','title','shortDescription','fullDescription','header','thumbnailImage','fullImage'
    ];
}
