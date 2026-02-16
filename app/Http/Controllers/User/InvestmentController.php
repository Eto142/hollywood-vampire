<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Investment;
use Illuminate\Support\Facades\Auth;

class InvestmentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0',
            'plan' => 'required|string|max:255',
        ]);
        Investment::create([
            'user_id' => Auth::id(),
            'plan' => $request->plan,
            'amount' => $request->amount,
            'status' => 0, // 0 = pending
        ]);
        return redirect()->back()->with('success', 'Investment placed and is now pending approval.');
    }
}
