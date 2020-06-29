<?php

namespace App\Http\Controllers;

use App\Article;
use App\GuideLine;
use Illuminate\Http\Request;

class GuidelineController extends Controller
{
    function list()
    {
        return view('guideline.MyGuideLine')->with('datas', GuideLine::all());
    }

    function delete($id)
    {
        GuideLine::destroy($id);
        return redirect()->back();
    }
}
