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
            'account_number' => 'nullable|string',
            'account_name' => 'nullable|string',
            'crypto_method' => 'nullable|string',
            'wallet_address' => 'nullable|string',
        ]);

        $user = Auth::user();
        $balance = Balance::where('user_id', $user->id)->first();
        if (!$balance || $balance->wallet_balance < $validated['wamount']) {
            return redirect()->back()->with('modal_alert', 'Insufficient wallet balance.');
        }

        $withdrawal = Withdrawal::create([
            'user_id' => $user->id,
            'amount' => $validated['wamount'],
            'method' => $validated['woption'],
            'bank_name' => $validated['bank_name'] ?? null,
            'account_number' => $validated['account_number'] ?? null,
            'account_name' => $validated['account_name'] ?? null,
            'crypto_method' => $validated['crypto_method'] ?? null,
            'wallet_address' => $validated['wallet_address'] ?? null,
            'status' => 0,
        ]);

        return redirect()->back()->with('modal_alert', 'Withdrawal request submitted!');
    }
}
