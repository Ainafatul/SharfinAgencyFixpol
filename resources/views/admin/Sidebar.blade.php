<aside class="menu-sidebar d-none d-lg-block">
    <div class="menu-sidebar__content js-scrollbar1 ps">
        <nav class="navbar-sidebar" style="margin-top:64px">
            <h3>Dashboard</h3>
            <hr>
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub"><a class="js-arrow" href="/Dashboard"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                <li><a href="{{route('AdminRegister')}}"><i class="fas fa-chart-bar"></i>Tambah Admin</a></li>
                <li><a href="{{route('NewAgent')}}"><i class="fas fa-chart-bar"></i>New Agent</a></li>
                {{-- <li><a href="{{route('Berita')}}"><i class="fas fa-chart-bar"></i>Berita</a></li>
                <li><a href="{{route('Panduan')}}"><i class="fas fa-chart-bar"></i>Panduan & Referensi</a></li>
                <li><a href="{{route('About')}}"><i class="fas fa-chart-bar"></i>About</a></li>
                <li><a href="{{route('SubEmail')}}"><i class="fas fa-chart-bar"></i>News Letter Subscriber</a></li> --}}
            </ul>
        </nav>
    </div>
</aside>
