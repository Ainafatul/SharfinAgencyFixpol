<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand font-weight-bold" href="/"><i class="fas fa-home"></i> Sharfin Agency</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('PropertyFilter',['type'=>'Sell'])}}">Jual</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('PropertyFilter',['type'=>'Rent'])}}">Sewa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('Articles')}}">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Agen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang Kami</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lainnya</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Panduan & Referensi</a>
                        <a class="dropdown-item" href="#">Simulasi Kredit</a>
                        <a class="dropdown-item" href="#">Tanya Properti</a>
                    </div>
                </li>
            </ul>
            @if(!Auth::check())

                <form action="{{route('UserRegister')}}">
                    <button type="submit" class="btn btn-outline-light btn-sm rounded-pill mr-1 px-4">Register</button>
                </form><form action="{{route('SignIn')}}">
                    <button type="submit" class="btn btn-nav btn-sm btn-light login px-5 my-2 my-sm-0 rounded-pill">Login</button>
                </form>
            @else
                <form action="{{route('Logout')}}">
                    <button type="submit" class="btn btn-outline-light btn-sm rounded-pill mr-1 px-4">Logout</button>
                </form>
                <form action="{{route('Dashboard')}}">
                    <button type="submit" class="btn btn-nav btn-sm btn-light login px-5 my-2 my-sm-0 rounded-pill">{{explode(' ',\App\Http\Controllers\AuthController::getUser()->name)[0]}}</button>
                </form>

            @endif
        </div>
    </div>
</nav>
