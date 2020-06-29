<?php

namespace App\Http\Controllers;

use App\Article;
use App\GuideLine;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function list(){
        return view('artikel.MyArtikel')->with('datas', Article::all());
    }

    function delete($id)
    {
        Article::destroy($id);
        return redirect()->back();
    }
}
