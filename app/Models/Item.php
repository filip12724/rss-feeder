<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
     protected $fillable = [
        'feed_id',
        'guid',
        'title',
        'link',
        'author',
        'pub_date',
        'description',
        'content',
        'is_read',
    ];

    protected $casts = [
        'pub_date'   => 'datetime',
        'is_read'    => 'boolean',
    ];

    public function feed(): BelongsTo 
    {
        return $this->belongsTo(Feed::class);
    }
}
