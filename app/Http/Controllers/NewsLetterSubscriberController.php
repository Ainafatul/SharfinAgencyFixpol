<?php

namespace App\Http\Controllers;
use App\NewsLetterSubscriber;
use Illuminate\Http\Request;

class NewsLetterSubscriberController extends Controller
{
    function SubEmail(SubEmail $data)
    {
        $data = NewsLetterSubscriber::all();
        return view('container')->with('layout', 'admin.SubEmail')->with('sidebar', 'admin.Sidebar')->with('data', $data);
    }

    function ExportExcel(){
        return Excel::download(new EmailExport, 'Email.xlsx');
    }
}
