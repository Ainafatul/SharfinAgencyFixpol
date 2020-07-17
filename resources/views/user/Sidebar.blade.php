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
            <i class="fa fa-shopping-cart"></i>
            <span>E-commerce</span>
            <span class="badge badge-pill badge-danger">3</span>
        </a>
        <div class="sidebar-submenu">
            <ul>
                <li>
                    <a href="#">Products

                    </a>
                </li>
                <li>
                    <a href="#">Orders</a>
                </li>
                <li>
                    <a href="#">Credit cart</a>
                </li>
            </ul>
        </div>
    </li>
    <li class="sidebar-dropdown">
        <a href="#">
            <i class="far fa-gem"></i>
            <span>Components</span>
        </a>
        <div class="sidebar-submenu">
            <ul>
                <li>
                    <a href="#">General</a>
                </li>
                <li>
                    <a href="#">Panels</a>
                </li>
                <li>
                    <a href="#">Tables</a>
                </li>
                <li>
                    <a href="#">Icons</a>
                </li>
                <li>
                    <a href="#">Forms</a>
                </li>
            </ul>
        </div>
    </li>
    <li class="sidebar-dropdown">
        <a href="{{route('PropertyChart')}}">
            <i class="fa fa-chart-line"></i>
            <span>Charts</span>
        </a>
    </li>
    <li class="sidebar-dropdown">
        <a href="#">
            <i class="fa fa-globe"></i>
            <span>Maps</span>
        </a>
        <div class="sidebar-submenu">
            <ul>
                <li>
                    <a href="#">Google maps</a>
                </li>
                <li>
                    <a href="#">Open street map</a>
                </li>
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
    <li>
        <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Calendar</span>
        </a>
    </li>
    <li>
        <a href="#">
            <i class="fa fa-folder"></i>
            <span>Examples</span>
        </a>
    </li>
@endsection
