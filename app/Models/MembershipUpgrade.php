<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MembershipUpgrade extends Model
{
    protected $fillable = [
        'user_id',
        'previous_membership',
        'new_membership',
        'amount',
        'status',
        'approved_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
