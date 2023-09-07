<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employeeReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_member_id',
        'review',
    ];
}
