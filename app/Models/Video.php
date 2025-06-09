<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['module_id', 'title', 'youtube_link', 'duration'];

    // Mutator untuk menyimpan youtube_link
    public function setYoutubeLinkAttribute($value)
    {
        $this->attributes['youtube_link'] = $value;
    }

    // Accessor untuk mendapatkan ID video YouTube
    public function getYoutubeVideoIdAttribute()
    {
        return $this->extractVideoId($this->youtube_link);
    }

    // Fungsi untuk mengekstrak ID video dari URL
    private function extractVideoId($url)
    {
        parse_str(parse_url($url, PHP_URL_QUERY), $query);
        return $query['v'] ?? null;
    }
}