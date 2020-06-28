<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Agent;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    static function getUser()
    {
        $user = Auth::user();
        if ($user->type == 'User') return User::find($user->id);
        if ($user->type == 'Agent') return Agent::find($user->id);
        if ($user->type == 'Admin') return Admin::find($user->id);
        return null;
    }

    function Dashboard()
    {
        $user = Auth::user();
        if ($user->type == 'User') return view('user.Dashboard');
        if ($user->type == 'Agent') return view('agent.Dashboard');
        if ($user->type == 'Admin') return view('admin.Dashboard');
        return null;
    }
}
