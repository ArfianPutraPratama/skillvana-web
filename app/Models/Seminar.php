<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    protected $fillable = [
        'title',
        'instructor',
        'description',
        'rating',
        'review_count',
        'discounted_price',
        'price',
        'image',
    ];
}
