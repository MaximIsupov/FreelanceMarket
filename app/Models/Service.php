<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'price', 'time', 'priceVague', 'user_id'
    ];

    protected $casts = [
        'price' => 'float',
        'active' => 'boolean',
        'time' => 'integer',
        'priceVague' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
