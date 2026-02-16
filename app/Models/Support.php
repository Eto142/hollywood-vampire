<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Support extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'message',
        'is_admin',
    ];

    // Relationship to user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
