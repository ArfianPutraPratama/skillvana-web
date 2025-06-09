<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Module;

class Bootcamp extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'instructor',
        'description',
        'start_date',
        'students',
        'lectures',
        'skill_level',
        'language',
        'quizzes',
        'certificate',
        'pass_percentage',
        'deadline',
        'certification_info',
        'learnings',
        'category', // Add category
        'duration', // Add duration
        'original_price', // Add original_price
        'discounted_price', // Add discounted_price
        'image', // Add image
    ];

    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}
