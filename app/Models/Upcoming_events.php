<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upcoming_events extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','title','shortDescription','fullDescription','header','thumbnailImage','fullImage'
    ];
}
