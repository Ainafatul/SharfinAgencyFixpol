<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use App\Agent;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Account;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;


    public function __construct()
    {
        $this->middleware('guest');
    }

    function formUser()
    {
        return view('public.RegisterUser');
    }

    function formAgent()
    {
        return view('public.RegisterAgent');
    }

    function formAdmin()
    {
        return view('public.RegisterAdmin');
    }

    protected function validatorUserRegister($data)
    {
        return Validator::make($data->all(), [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:accounts'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'string', 'min:11', 'max:12'],
            'name' => ['required'],
            'birth_date' => ['required'],
            'gender' => ['required'],
            'address' => ['required'],
        ]);
    }

    function onUserRegister(Request $request)
    {
        $data = [
            'email' => $request['email'],
            'type' => 'User',
            'password' => Hash::make($request['password']),
            'phone' => $request['phone'],
            'name' => $request['name'],
            'birth_date' => $request['birth_date'],
            'gender' => $request['gender'],
            'address' => $request['address'],
        ];
        $validator = $this->validatorUserRegister($request);
        if (!$validator->fails()) {
            Account::create($data);
            $data['id'] = Account::latest()->first()->id;
            User::create($data);
            return redirect(route('SignIn'));
        } else {
            return redirect(route('UserRegister'))->withErrors($validator);
        }
    }

    protected function validatorAgentRegister($data)
    {
        return Validator::make($data->all(), [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:accounts'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'string', 'min:11', 'max:12'],
            'agency' => ['required'],
            'name' => ['required'],
            'job' => ['required'],
            'birth_date' => ['required'],
            'gender' => ['required'],
            'address' => ['required'],
        ]);
    }

    function onAgentRegister(Request $request)
    {
        $data = [
            'email' => $request['email'],
            'type' => 'Agent',
            'password' => Hash::make($request['password']),
            'phone' => $request['phone'],
            'name' => $request['name'],
            'agency' => $request['agency'],
            'job' => $request['job'],
            'birth_date' => $request['birth_date'],
            'gender' => $request['gender'],
            'address' => $request['address'],
        ];
        $validator = $this->validatorUserRegister($request);
        if (!$validator->fails()) {
            Account::create($data);
            $data['id'] = Account::latest()->first()->id;
            Agent::create($data);
            return redirect(route('SignIn'));
        } else {
            return redirect(route('AgentRegister'))->withErrors($validator);
        }
    }

    protected function validatorAdminRegister($data)
    {
        return Validator::make($data->all(), [
            'name' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:accounts'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    function onAdminRegister(Request $request)
    {
        $data = [
            'name' => $request['name'],
            'email' => $request['email'],
            'type' => 'Admin',
            'password' => Hash::make($request['password']),
        ];
        $validator = $this->validatorAdminRegister($request);
        if (!$validator->fails()) {
            Account::create($data);
            $data['id'] = Account::latest()->first()->id;
            Admin::create($data);
            return redirect(route('SignIn'));
        } else {
            return redirect(route('AdminRegister'))->withErrors($validator);
        }
    }
}
