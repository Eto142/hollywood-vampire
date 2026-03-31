<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Balance;
use App\Models\User;

class BalanceController extends Controller
{
    public function index($userId)
    {
        $user = User::findOrFail($userId);
        $balance = Balance::where('user_id', $userId)->first();
        return view('admin.user-balance', compact('user', 'balance'));
    }

    public function update(Request $request, $userId)
    {
        $request->validate([
            'wallet_balance' => 'nullable|numeric|min:0',
            'investment_balance' => 'nullable|numeric|min:0',
        ]);
        $balance = Balance::firstOrCreate(['user_id' => $userId]);
        if ($request->filled('wallet_balance')) {
            $balance->wallet_balance = $request->wallet_balance;
        }
        if ($request->filled('investment_balance')) {
            $balance->investment_balance = $request->investment_balance;
        }
        $balance->save();
        return redirect()->route('admin.profile', $userId)->with('success', 'Balances updated successfully.');
    }
}
