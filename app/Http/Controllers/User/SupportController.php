<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Support;
use Illuminate\Support\Facades\Auth;

class SupportController extends Controller
{
    public function index()
    {
        $messages = Support::where('user_id', Auth::id())->orderBy('created_at')->get();
        return view('user.support', compact('messages'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:2000',
        ]);
        $support = Support::create([
            'user_id' => Auth::id(),
            'message' => $request->message,
            'is_admin' => false,
        ]);
        return response()->json(['success' => true, 'message' => $support]);
    }

    public function fetch()
    {
        $messages = Support::where('user_id', Auth::id())->orderBy('created_at')->get();
        return view('user.partials.support-messages', compact('messages'))->render();
    }
}
