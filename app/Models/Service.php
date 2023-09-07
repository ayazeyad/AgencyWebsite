<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'icon',
        'name_en',
        'active',
        'description_en',
    ];

    public function clients(): BelongsToMany
    {
        return $this->belongsToMany(Client::class, 'client_service')->withPivot('status');
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_service')->withPivot('notes');
    }
}
