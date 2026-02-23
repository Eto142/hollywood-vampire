<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Deposit;
use Illuminate\Support\Facades\Auth;

class DepositController extends Controller
{
    public function create()
    {
        return view('user.deposit');
    }

    public function store(Request $request)
    {
        $request->validate([
            'damount' => 'required|numeric|min:1',
            'doption' => 'required|in:bitcoin,ethereum,usdt',
        ]);

        $deposit = Deposit::create([
            'user_id' => Auth::id(),
            'amount' => $request->damount,
            'method' => $request->doption,
            'status' => 0, // pending
        ]);

        return redirect()->route('deposit.details', ['deposit' => $deposit->id]);
    }

    public function details($id)
    {
        $deposit = Deposit::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        return view('user.deposit_details', compact('deposit'));
    }
}
