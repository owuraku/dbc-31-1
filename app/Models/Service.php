<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Service extends Model
{
    protected $fillable = [
        'name',
        'description',
        'amount',
        'image',
        'user_id',
    ];

    public function imageUrl(): string
    {
        return Storage::url($this->image);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
