<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Withdrawal;
use Illuminate\Support\Facades\Auth;
use App\Models\Balance;

class WithdrawalController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'wamount' => 'required|numeric|min:1',
            'woption' => 'required|in:bank,crypto',
            'bank_name' => 'nullable|string',
            'account_type' => 'nullable|in:checking,savings',
            'routing_number' => 'nullable|string',
            'account_number' => 'nullable|string',
            'account_name' => 'nullable|string',
            'crypto_method' => 'nullable|string',
            'wallet_address' => 'nullable|string',
        ]);

        $user = Auth::user();
        $balance = Balance::where('user_id', $user->id)->first();
        if (!$balance || $balance->wallet_balance < $validated['wamount']) {
            return response()->json(['status' => 'error', 'message' => 'Insufficient wallet balance.'], 422);
        }

        Withdrawal::create([
            'user_id' => $user->id,
            'amount' => $validated['wamount'],
            'method' => $validated['woption'],
            'bank_name' => $validated['bank_name'] ?? null,
            'account_type' => $validated['account_type'] ?? null,
            'routing_number' => $validated['routing_number'] ?? null,
            'account_number' => $validated['account_number'] ?? null,
            'account_name' => $validated['account_name'] ?? null,
            'crypto_method' => $validated['crypto_method'] ?? null,
            'wallet_address' => $validated['wallet_address'] ?? null,
            'status' => 0,
        ]);

        return response()->json(['status' => 'success', 'message' => 'Your withdrawal request has been submitted. We will process it shortly.']);
    }
}
