<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware(['auth', 'role:superadmin']);
    // }
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    public function dashboard()
    {
        $user = Auth::user();
        return view('users.dashboard', compact('user'));
    }

    public function updateRole(Request $request, User $user)
    {
        $request->validate([
            'role' => ['required', 'in:admin,user'],
        ]);

        $user->update(['role' => $request->role]);

        return back()->with('success', 'User role updated successfully.');
    }

    public function updateSubscription(Request $request, User $user)
    {
        $request->validate([
            'duration' => ['required', 'in:0 month,1 month,3 months,6 months,12 months'],
        ]);

        $milliseconds = $this->durationToMilliseconds($request->duration);

        // Calculate the countdown end time
        $countdownEndTime = now()->addMilliseconds($milliseconds);

        $user->update([
            'duration' => $request->duration,
            'countdown_end_time' => $countdownEndTime,
        ]);

        return back()->with('success', 'Subscription duration updated successfully.');
    }

    // New method to convert duration to milliseconds
    private function durationToMilliseconds($duration)
    {
        switch ($duration) {
            case '1 month':
                return 30 * 24 * 60 * 60 * 1000; // 30 days
            case '3 months':
                return 91 * 24 * 60 * 60 * 1000; // 91 days
            case '6 months':
                return 183 * 24 * 60 * 60 * 1000; // 183 days
            case '12 months':
                return 365 * 24 * 60 * 60 * 1000; // 365 days
            default:
                return 0;
        }
    }


    public function show($username)
    {
        $user = User::where('username', $username)->firstOrFail();
        return view('users.details', compact('user'));
    }


    public function showProfile($username)
    {
        $user = User::where('username', $username)->firstOrFail();
        $sitemap = $user->sitemap;

        return view('users.profile', compact('user', 'sitemap'));
    }




}
