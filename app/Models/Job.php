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
}
