<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'method',
        'bank_name',
        'account_number',
        'account_name',
        'crypto_method',
        'wallet_address',
        'status',
    ];

    // Status: 0 = pending, 1 = approved
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
