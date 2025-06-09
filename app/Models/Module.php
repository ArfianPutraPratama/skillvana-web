<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = ['bootcamp_id', 'name', 'description'];

    // Relasi dengan Bootcamp
    public function bootcamp()
    {
        return $this->belongsTo(Bootcamp::class);
    }

    // Relasi dengan Video
    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}