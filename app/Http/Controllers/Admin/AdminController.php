<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function index (){

          // User Statistics
        $newUsersCount = User::where('created_at', '>=', Carbon::now()->subDays(7))->count();
        $totalUsers = User::count();
        $totalDeposits = 0;
        $totalTransactions = 0;

         // Recent Activity
        $recentUsers = User::latest()->take(5)->get();
        $result = User::latest()->paginate(10);


        return view('admin.home', compact(
            'newUsersCount',
            'totalUsers',
            'totalDeposits',
            'totalTransactions',
            'result',
            'recentUsers',
        ));
     
    }

}
