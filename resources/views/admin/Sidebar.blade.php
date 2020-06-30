@extends('template.Sidebar')

@section('general')
    <li>
        <a href="{{route('Dashboard')}}">
            <i class="fa fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="sidebar-dropdown">
        <a href="#">
            <i class="fa fa-users"></i>
            <span>Agents</span>
            <span class="badge badge-pill badge-primary">3</span>
        </a>
        <div class="sidebar-submenu">
            <ul>
                <li><a href="">Daftar</a></li>
                <li><a href="{{route('ApproveAgent')}}">Approval</a></li>
            </ul>
        </div>
    </li>
    <li class="sidebar-dropdown">
        <a href="#">
            <i class="fa fa-archive"></i>
            <span>Article</span>
        </a>
        <div class="sidebar-submenu">
            <ul>
                <li><a href="{{route('Articles')}}">Daftar</a></li>
                <li><a href="{{route('NewArticle')}}">Tambah</a></li>
            </ul>
        </div>
    </li>
    <li class="sidebar-dropdown">
        <a href="#">
            <i class="fa fa-ruler"></i>
            <span>Guideline</span>
        </a>
        <div class="sidebar-submenu">
            <ul>
                <li><a href="{{route('Guidelines')}}">Daftar</a></li>
                <li><a href="{{route('NewGuideline')}}">Tambah</a></li>
            </ul>
        </div>
    </li>
    <li class="sidebar-dropdown">
        <a href="#">
            <i class="fa fa-info"></i>
            <span>About</span>
        </a>
        <div class="sidebar-submenu">
            <ul>
                <li><a href="{{route('About')}}">Daftar</a></li>
                <li><a href="{{route('NewAbout')}}">Tambah</a></li>
            </ul>
        </div>
    </li>
    <li>
        <a href="{{route('NewsLetterSubscriber')}}">
            <i class="fa fa-envelope"></i>
            <span>Email Subscriber</span>
        </a>
    </li>
    <li>
        <a href="{{route('AdminRegister')}}">
            <i class="fa fa-user"></i>
            <span>Register Admin</span>
        </a>
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
