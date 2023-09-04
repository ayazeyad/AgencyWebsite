<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'name_en',
        'name_ar',
        'google_play_link',
        'app_store_link',
    ];

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, 'client_service')->withPivot('status');
    }
}
