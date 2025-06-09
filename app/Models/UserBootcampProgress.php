<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserBootcampProgress extends Model
{
    use HasFactory;

    // Tambahkan ini untuk menyesuaikan dengan nama tabel di database
    protected $table = 'user_bootcamp_progress';

    protected $fillable = [
        'user_id',
        'bootcamp_id',
        'watched_videos',
        'progress_percentage',
        'last_watched_at',
        'certificate_claimed'
    ];

    protected $casts = [
        'watched_videos' => 'array',
        'progress_percentage' => 'float',
        'last_watched_at' => 'datetime',
        'certificate_claimed' => 'boolean'
    ];

    /**
     * Get the user associated with the progress.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the bootcamp associated with the progress.
     */
    public function bootcamp(): BelongsTo
    {
        return $this->belongsTo(Bootcamp::class);
    }

    /**
     * Accessor for watched_videos to ensure array format.
     */
    public function getWatchedVideosAttribute($value)
    {
        if (is_null($value)) {
            return [];
        }

        if (is_array($value)) {
            return $value;
        }

        return json_decode($value, true) ?? [];
    }

    /**
     * Mutator for watched_videos to ensure proper storage.
     */
    public function setWatchedVideosAttribute($value)
    {
        $this->attributes['watched_videos'] = is_array($value)
            ? json_encode(array_values(array_unique($value)))
            : json_encode([]);
    }

    /**
     * Scope to get progress for a specific user and bootcamp.
     */
    public function scopeForUserAndBootcamp($query, $userId, $bootcampId)
    {
        return $query->where('user_id', $userId)
            ->where('bootcamp_id', $bootcampId);
    }

    /**
     * Check if a specific video has been watched.
     */
    public function hasWatchedVideo(string $videoId): bool
    {
        return in_array($videoId, $this->watched_videos);
    }

    /**
     * Add a video to watched list.
     */
    public function addWatchedVideo(string $videoId): void
    {
        $watched = $this->watched_videos;
        if (!in_array($videoId, $watched)) {
            $watched[] = $videoId;
            $this->watched_videos = $watched;
        }
    }

    /**
     * Calculate progress percentage based on watched videos and total videos
     */
    public function calculateProgressPercentage(int $totalVideos): float
    {
        if ($totalVideos <= 0) {
            return 0;
        }

        $watchedCount = count($this->watched_videos);
        return min(100, round(($watchedCount / $totalVideos) * 100, 2));
    }
}
