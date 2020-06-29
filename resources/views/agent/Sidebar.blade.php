@extends('template.Sidebar')

@section('general')
    <li>
        <a href="{{route('Dashboard')}}">
            <i class="fa fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>k
    </li>
    <li class="sidebar-dropdown">
        <a href="#">
            <i class="fa fa-home"></i>
            <span>Article</span>
        </a>
        <div class="sidebar-submenu">
            <ul>
                <li><a href="{{route('Articles')}}">List</a></li>
                <li><a href="{{route('NewArticle')}}">Tambah</a></li>
            </ul>
        </div>
    </li>
@endsection

@section('extra')
    <li>
        <a href="#">
            <i class="fa fa-book"></i>
            <span>Documentation</span>
            <span class="badge badge-pill badge-primary">Beta</span>
        </a>
    </li>
@endsection
