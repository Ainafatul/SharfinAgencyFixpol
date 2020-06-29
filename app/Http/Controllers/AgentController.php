<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{

    function dashboard()
    {
        return view('agent.Dashboard',['data'=>AuthController::getData()]);
    }

    function newProperty()
    {

        return view('agent.NewProperty', ['data' => AuthController::getData()]);
    }
}
