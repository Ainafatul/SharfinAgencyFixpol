<?php

namespace App\Http\Controllers;
use App\Exports\ExportEmail;
use App\NewsLetterSubscriber;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class NewsLetterSubscriberController extends Controller
{
    function SubEmail(NewsLetterSubscriber $datas)
    {
        $datas = NewsLetterSubscriber::all();
        return view('admin.NewsLetterSubscriber')->with('datas', $datas);
    }

    function ExportExcel(){
        return Excel::download(new ExportEmail, 'Email.xlsx');
    }
}

