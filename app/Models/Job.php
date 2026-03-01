<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'price', 'time', 'user_id'
    ];

    protected $casts = [
        'price' => 'float',
        'active' => 'boolean',
        'time' => 'integer'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function hasOfferFromUser(?int $userId = null): bool
    {
        if (!$userId) {
            $userId = auth()->id();
        }
        if (!$userId) {
            return false;
        }

        return $this->offers()
            ->where('user_id', $userId)
            ->exists();
    }
}
