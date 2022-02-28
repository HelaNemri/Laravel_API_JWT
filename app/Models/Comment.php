<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'text'
    ];
    // primary key not auto incremented
    // public $incrementing = false;

    //disable automatic timestamps
    //public $timestamps = false;
}
