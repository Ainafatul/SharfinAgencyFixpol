<?php

namespace App\Http\Controllers;

use App\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{

    function dashboard()
    {
        return view('agent.Dashboard', ['data' => AuthController::getData()]);
    }

    function newProperty()
    {

        return view('agent.NewProperty', ['data' => AuthController::getData()]);
    }

    function list()
    {
        return view('public.AgentList', ['agents' => Agent::all()]);
    }

    function detail($id)
    {
        return view('public.AgentDetail', ['agent' => Agent::find($id)]);
    }
}
