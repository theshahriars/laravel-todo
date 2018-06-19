<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

// Model
use App\Todo;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $completed = Todo::where('status', 1)->where('user_id', $user->id)->count();
        $not_completed = Todo::where('status', 0)->where('user_id', $user->id)->count();
        $total_high = Todo::where('priority', 'high')->where('user_id', $user->id)->count();
        $total_medium = Todo::where('priority', 'medium')->where('user_id', $user->id)->count();
        $total_low = Todo::where('priority', 'low')->where('user_id', $user->id)->count();

        return view('admin.dashboard.index', compact('completed', 'not_completed', 'total_high', 'total_medium', 'total_low'));
    }
}
