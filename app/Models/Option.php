<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'votes_count'
    ];
    public function poll(){
        return $this->belongsTo(Poll::class);
    }
}
