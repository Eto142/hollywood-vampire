<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Investment;

class InvestmentController extends Controller
{


/**
     * Upgrade a user's investment.
     */
    public function upgrade(Request $request, $id)
    {
        $request->validate([
            'investment_plan' => 'required|string|in:basic,silver,gold,platinum',
            'investment_amount' => 'required|numeric|min:0',
        ]);

        $user = \App\Models\User::findOrFail($id);
        $user->investment_plan = $request->investment_plan;
        $user->save();

        // Update or create investment record
        $investment = Investment::updateOrCreate(
            ['user_id' => $user->id],
            [
                'plan' => $request->investment_plan,
                'amount' => $request->investment_amount,
                'status' => 1, // Approved by default
            ]
        );

        // Always update (or create) balance record with new investment amount
        $balance = \App\Models\Balance::firstOrCreate(['user_id' => $user->id]);
        $balance->investment_balance = $request->investment_amount;
        $balance->save();

        return redirect()->route('admin.profile', $id)->with('success', 'Investment upgraded successfully!');
    }



    /**
     * Show the manage investments page.
     */
    public function manage()
    {
        // Fetch pending investments and pass to the view as $user_investment
        $user_investment = Investment::where('status', 'pending')->get();
        return view('admin.manage_investments', compact('user_investment'));
    }
    /**
     * Approve an investment.
     */
    public function approve($id)
    {
        $investment = Investment::findOrFail($id);
        $investment->status = 1; // Approved
        $investment->save();
        return redirect()->back()->with('status', 'Investment approved successfully.');
    }

    /**
     * Decline an investment.
     */
    public function decline($id)
    {
        $investment = Investment::findOrFail($id);
        $investment->status = 2; // Declined (use 2 for declined)
        $investment->save();
        return redirect()->back()->with('status', 'Investment declined successfully.');
    }
}
