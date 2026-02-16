<?php

namespace App\Http\Controllers\User;
use App\Models\Conversion;
use App\Models\Deposit;
use App\Models\Escrow;
use App\Models\Fiat;
use App\Models\PaymentInformation;
use App\Models\Wallet;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{

      // display user dashboard
      public function index()
      {
        $user = auth()->user();
        $balance = \App\Models\Balance::where('user_id', $user->id)->first();
        $activities = \App\Models\Activity::where('user_id', $user->id)->latest()->take(5)->get();
        return view('user.home', compact('user', 'balance', 'activities'));
      }

      public function overview()
      {
        return view('user.overview');
      }

      public function membership()
      {
        return view('user.membership');
      }

      public function plan()
      {
        $user = auth()->user();
        $balance = \App\Models\Balance::where('user_id', $user->id)->first();
        return view('user.plan', compact('balance'));
      }

      public function support()
      {
        return view('user.support');
      }

      public function activityLog()
      {
        $activities = \App\Models\Activity::where('user_id', auth()->id())->latest()->get();
        return view('user.activity-log', compact('activities'));
      }
    }



