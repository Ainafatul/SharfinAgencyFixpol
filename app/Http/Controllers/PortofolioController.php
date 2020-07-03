<?php

namespace App\Http\Controllers;

use App\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PortofolioController extends Controller
{
    protected function newPortofolio()
    {
        return view('portofolio.NewPortofolio');
    }
    protected function validator($data)
    {
        return Validator::make($data->all(), [
            'sold' => ['required'],
            'leased' => ['required'],
            'consult' => ['required'],
            'agent' => ['required'],
        ]);
    }
    function onNewPortofolio(Request $request)
    {
        $data = [
            'sold' => $request['sold'],
            'leased' => $request['leased'],
            'consult' => $request['consult'],
            'agent' => $request['agent'],
        ];
        $validator = $this->validator($request);
        if (!$validator->fails()) {
            Portofolio::create($data);
            return redirect()->route('Portofolio');
        }
        return redirect()->back()->withErrors($validator);
    }
    function list()
    {
        return view('portofolio.MyPortofolio')->with('datas', Portofolio::all());
    }

    function delete($id)
    {
        Portofolio::destroy($id);
        return redirect()->back();
    }

    function update($id)
    {
        $data = Portofolio::find($id);
        return view('portofolio.UpdatePortofolio')->with('data', $data);
    }

    function onUpdate(Request $request, $id)
    {
        $portofolio = Portofolio::find($id);
        $portofolio->sold = $request['sold'];
        $portofolio->leased = $request['leased'];
        $portofolio->consult = $request['consult'];
        $portofolio->agent = $request['agent'];

        $portofolio->save();
        return redirect()->route('Portofolio');
    }

    function show()
    {
        return view('public.Landing')->with('datas', Portofolio::all());
    }


}
