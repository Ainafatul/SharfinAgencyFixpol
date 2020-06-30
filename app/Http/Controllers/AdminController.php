<?php

namespace App\Http\Controllers;

use App\Account;
use App\Admin;
use App\Agent;
use App\Article;
use App\GuideLine;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    function dashboard()
    {
        return view('admin.Dashboard', ['data' => AuthController::getData()]);
    }

    protected function newArticle()
    {
        return view('artikel.NewArtikel');
    }

    protected function newGuideline()
    {
        return view('guideline.NewGuideLine');
    }


    protected function validatorGuidelineRegister($data)
    {
        return Validator::make($data->all(), [
            'title' => ['required'],
            'author' => ['required'],
            'content' => ['required'],
            'image' => ['required'],
        ]);
    }

    protected function onNewGuideline(Request $request)
    {
        $data = [
            'title' => $request['title'],
            'author' => $request['author'],
            'content' => $request['content'],
            'image' => $request['image'],
        ];
        $validator = $this->validatorGuidelineRegister($request);
        if (!$validator->fails()) {
            $file = $request->file('image');
            $path = $file->storeAs('public/image/guideline', Carbon::now()->timestamp . '.' . $file->extension());
            $data['image'] = str_replace('public', 'storage', $path);
            GuideLine::create($data);
            return redirect()->back();
        }
        return redirect()->back()->withErrors($validator);
    }

    protected function validatorArticleRegister($data)
    {
        return Validator::make($data->all(), [
            'title' => ['required'],
            'author' => ['required'],
            'content' => ['required'],
            'image' => ['required'],
        ]);
    }

    protected function onNewArticle(Request $request)
    {
        $data = [
            'title' => $request['title'],
            'author' => $request['author'],
            'content' => $request['content'],
            'image' => $request['image'],
        ];
        $validator = $this->validatorGuidelineRegister($request);
        if (!$validator->fails()) {
            $file = $request->file('image');
            $path = $file->storeAs('public/image/article', Carbon::now()->timestamp . '.' . $file->extension());
            $data['image'] = str_replace('public', 'storage', $path);
            Article::create($data);
            return redirect()->route('MyArticle');
        }
        return redirect()->back()->withErrors($validator);
    }

    /////////////////////////////
    //    Approve Agent
    /////////////////////////////

    function approveAgent()
    {
        $datas = Agent::where('approve', null)->get();
        return view('admin.ApproveAgent')->with('datas', $datas);
    }

    function onAgentApproved(Request $request)
    {

        $agent = Agent::find($request->id);
        $agent->approve = Carbon::now();
        $agent->save();
        $details = [
            'title' => 'Mail from Sharfin Agency',
            'body' => 'Agent Telah di Approve'
        ];

        \Mail::to(Auth::user()->email)->send(new \App\Mail\SendEmail($details));

        return redirect()->back();
    }

    /////////////////////////////
    //    New Admin
    /////////////////////////////

    function newAdmin()
    {
        return view('admin.RegisterAdmin');
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
            'role' => 'Admin',
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
