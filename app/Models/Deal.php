<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'lead_id',
        'amount',
        'description',
        'status',
    ];
}
