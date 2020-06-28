@extends('layout.Main')

@section('content')
    <div>
        <!-- banner -->
        <section>
            <div class="container-fluid px-0">
                <div>
                    <img class="img-banner d-block img-fluid mx-auto" src="{{asset('lib/bootstrap/img/2.jpg')}}" alt="">
                </div>
                <!-- form cari properti -->
                <div class="row mx-auto">
                    <div class="item col-12 col-lg-6 mx-auto">
                        <div class="card card-banner ">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-body text-center">
                                        <h4 class="font-weight-bold text-white">Temukan Tempat Tinggal Idaman Anda</h4>
                                        <form class="text-center">
                                            <div class="row mx-auto py-3">
                                                <div class="col-9">
                                                    <input class="form-control form-tanya rounded-pill pl-4" type="text" placeholder="Cari Lokasi"
                                                           aria-label="Search">
                                                </div>
                                                <div class="col-3">
                                                    <input class="btn btn-banner btn-light btn-md mr-5 px-4 px-xl-5 mb-2 rounded-pill" type="submit"
                                                           value="Cari">
                                                </div>
                                            </div>
                                            <!-- Example single danger button -->
                                            <div class="row mx-auto">
                                                <div class="col-4">
                                                    <select class="custom-select">
                                                        <option selected>Kategori</option>
                                                        <option value="1">Beli</option>
                                                        <option value="2">Sewa</option>
                                                    </select>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-input">
                                                        <input class="form-control" type="text" placeholder="Harga Min">
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-input">
                                                        <input class="form-control" type="text" placeholder="Harga Max">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- akhir form cari properti -->
            </div>
        </section>
        <!-- akhir banner -->


        <!-- Rekomendasi -->
        <section class="section-rekomendasi">
            <!-- <div id="rectangle-putih"></div> -->
            <div class="container py-4">
                <div class="row">
                    <div class="col">
                        <h3 class="tittle">Rekomendasi</h3>
                    </div>
                    <div class="col text-right">
                        <a href="jual.html" class="btn btn-lainnya btn-sm btn-secondary rounded-pill px-3">Lainnya <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="row">
                    <!-- item -->
                    <div class="item col-12 col-sm-6 mb-1 col-lg-4 p-1 ">
                        <div class="card card-rekomendasi">
                            <a href="#" class="item">
                                <div class="row ">
                                    <div class="col-5 my-auto">
                                        <img src="{{asset('lib/bootstrap/img/sold.svg')}}" class="img-fluid img-rekomendasi d-block mx-auto" alt="gambar 1">
                                    </div>
                                    <div class="col-7 pl-0">
                                        <div class="card-body pl-0">
                                            <h6 class="card-subtitle mb-2">Alam Singgahsana</h6>
                                            <h6 class="card-subtitle alamat text-muted mb-xl-3">Jl. Raya Cerme</h6><br>
                                            <h5 class="card-title mb-2">Rp. 996 Jt</h5>
                                            <div class="row spesifikasi">
                                                <ul class="float-left">
                                                    <li class="item spek active">
                                                        <i class="fas fa-bed"> 4</i>
                                                    </li>
                                                    <li class="item spek">
                                                        <i class="fas fa-shower"> 3</i>
                                                    </li>
                                                    <li class="item spek">
                                                        <i class="fas fa-expand-arrows-alt"> 350 m<sup>2</sup></i>
                                                    </li>
                                                    <li class="item spek">
                                                        <i class="fas fa-building"> 2 lt</i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item col-12 col-sm-6 mb-1 col-lg-4 p-1 ">
                        <div class="card card-rekomendasi">
                            <a href="#" class="item">
                                <div class="row ">
                                    <div class="col-5 my-auto">
                                        <img src="{{asset('lib/bootstrap/img/2.jpg')}}" class="img-fluid img-rekomendasi d-block mx-auto" alt="gambar 1">
                                    </div>
                                    <div class="col-7 pl-0">
                                        <div class="card-body pl-0">
                                            <h6 class="card-subtitle mb-2">Alam Singgahsana</h6>
                                            <h6 class="card-subtitle alamat text-muted mb-xl-3">Jl. Raya Cerme</h6><br>
                                            <h5 class="card-title mb-2">Rp. 996 Jt</h5>
                                            <div class="row spesifikasi">
                                                <ul class="float-left">
                                                    <li class="item spek active">
                                                        <i class="fas fa-bed"> 4</i>
                                                    </li>
                                                    <li class="item spek">
                                                        <i class="fas fa-shower"> 3</i>
                                                    </li>
                                                    <li class="item spek">
                                                        <i class="fas fa-expand-arrows-alt"> 350 m<sup>2</sup></i>
                                                    </li>
                                                    <li class="item spek">
                                                        <i class="fas fa-building"> 2 lt</i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item col-12 col-sm-6 mb-1 col-lg-4 p-1 ">
                        <div class="card card-rekomendasi">
                            <a href="#" class="item">
                                <div class="row ">
                                    <div class="col-5 my-auto">
                                        <img src="{{asset('lib/bootstrap/img/2.jpg')}}" class="img-fluid img-rekomendasi d-block mx-auto" alt="gambar 1">
                                    </div>
                                    <div class="col-7 pl-0">
                                        <div class="card-body pl-0">
                                            <h6 class="card-subtitle mb-2">Alam Singgahsana</h6>
                                            <h6 class="card-subtitle alamat text-muted mb-xl-3">Jl. Raya Cerme</h6><br>
                                            <h5 class="card-title mb-2">Rp. 996 Jt</h5>
                                            <div class="row spesifikasi">
                                                <ul class="float-left">
                                                    <li class="item spek active">
                                                        <i class="fas fa-bed"> 4</i>
                                                    </li>
                                                    <li class="item spek">
                                                        <i class="fas fa-shower"> 3</i>
                                                    </li>
                                                    <li class="item spek">
                                                        <i class="fas fa-expand-arrows-alt"> 350 m<sup>2</sup></i>
                                                    </li>
                                                    <li class="item spek">
                                                        <i class="fas fa-building"> 2 lt</i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item col-12 col-sm-6 mb-1 col-lg-4 p-1 ">
                        <div class="card card-rekomendasi">
                            <a href="#" class="item">
                                <div class="row ">
                                    <div class="col-5 my-auto">
                                        <img src="{{asset('lib/bootstrap/img/2.jpg')}}" class="img-fluid img-rekomendasi d-block mx-auto" alt="gambar 1">
                                    </div>
                                    <div class="col-7 pl-0">
                                        <div class="card-body pl-0">
                                            <h6 class="card-subtitle mb-2">Alam Singgahsana</h6>
                                            <h6 class="card-subtitle alamat text-muted mb-xl-3">Jl. Raya Cerme</h6><br>
                                            <h5 class="card-title mb-2">Rp. 996 Jt</h5>
                                            <div class="row spesifikasi">
                                                <ul class="float-left">
                                                    <li class="item spek active">
                                                        <i class="fas fa-bed"> 4</i>
                                                    </li>
                                                    <li class="item spek">
                                                        <i class="fas fa-shower"> 3</i>
                                                    </li>
                                                    <li class="item spek">
                                                        <i class="fas fa-expand-arrows-alt"> 350 m<sup>2</sup></i>
                                                    </li>
                                                    <li class="item spek">
                                                        <i class="fas fa-building"> 2 lt</i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item col-12 col-sm-6 mb-1 col-lg-4 p-1 ">
                        <div class="card card-rekomendasi">
                            <a href="#" class="item">
                                <div class="row ">
                                    <div class="col-5 my-auto">
                                        <img src="{{asset('lib/bootstrap/img/2.jpg')}}" class="img-fluid img-rekomendasi d-block mx-auto" alt="gambar 1">
                                    </div>
                                    <div class="col-7 pl-0">
                                        <div class="card-body pl-0">
                                            <h6 class="card-subtitle mb-2">Alam Singgahsana</h6>
                                            <h6 class="card-subtitle alamat text-muted mb-xl-3">Jl. Raya Cerme</h6><br>
                                            <h5 class="card-title mb-2">Rp. 996 Jt</h5>
                                            <div class="row spesifikasi">
                                                <ul class="float-left">
                                                    <li class="item spek active">
                                                        <i class="fas fa-bed"> 4</i>
                                                    </li>
                                                    <li class="item spek">
                                                        <i class="fas fa-shower"> 3</i>
                                                    </li>
                                                    <li class="item spek">
                                                        <i class="fas fa-expand-arrows-alt"> 350 m<sup>2</sup></i>
                                                    </li>
                                                    <li class="item spek">
                                                        <i class="fas fa-building"> 2 lt</i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item col-12 col-sm-6 mb-1 col-lg-4 p-1 ">
                        <div class="card card-rekomendasi">
                            <a href="#" class="item">
                                <div class="row ">
                                    <div class="col-5 my-auto">
                                        <img src="{{asset('lib/bootstrap/img/sold.svg')}}" class="img-fluid img-rekomendasi d-block mx-auto" alt="gambar 1">
                                    </div>
                                    <div class="col-7 pl-0">
                                        <div class="card-body pl-0">
                                            <h6 class="card-subtitle mb-2">Alam Singgahsana</h6>
                                            <h6 class="card-subtitle alamat text-muted mb-xl-3">Jl. Raya Cerme</h6><br>
                                            <h5 class="card-title mb-2">Rp. 996 Jt</h5>
                                            <div class="row spesifikasi">
                                                <ul class="float-left">
                                                    <li class="item spek active">
                                                        <i class="fas fa-bed"> 4</i>
                                                    </li>
                                                    <li class="item spek">
                                                        <i class="fas fa-shower"> 3</i>
                                                    </li>
                                                    <li class="item spek">
                                                        <i class="fas fa-expand-arrows-alt"> 350 m<sup>2</sup></i>
                                                    </li>
                                                    <li class="item spek">
                                                        <i class="fas fa-building"> 2 lt</i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </section>
        <br><br>
        <!-- akhir Rekomendasi -->


        <!-- fitur -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3 class="tittle pb-3 text-dark text-center mb-5">Fitur Sharfin Agency</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="item col-6 mb-1 col-lg-3 p-1 text-center">
                        <figure class="figure figure-portofolio text-center">
                            <img src="{{asset('lib/bootstrap/img/sold.svg')}}" class="figure-img img-fluid icon-fitur mb-3" alt="">
                            <figcaption class="figure-caption text-dark">
                                <h6 class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime provident debitis, eveniet molestias cupiditate
                                    esse!</h6>
                            </figcaption>
                        </figure>
                        <hr class="mx-5 mt-4" style="border-width: 2px;">
                    </div>
                    <div class="item col-6 mb-1 col-lg-3 p-1 text-center">
                        <figure class="figure figure-portofolio text-center">
                            <img src="{{asset('lib/bootstrap/img/sold.svg')}}" class="figure-img img-fluid icon-fitur mb-3" alt="">
                            <figcaption class="figure-caption text-dark">
                                <h6 class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium laudantium sunt natus nisi illo
                                    voluptatibus.</h6>
                            </figcaption>
                        </figure>
                        <hr class="mx-5 mt-4" style="border-width: 2px;">
                    </div>
                    <div class="item col-6 mb-1 col-lg-3 p-1 text-center">
                        <figure class="figure figure-portofolio text-center">
                            <img src="{{asset('lib/bootstrap/img/sold.svg')}}" class="figure-img img-fluid icon-fitur mb-3" alt="">
                            <figcaption class="figure-caption text-dark">
                                <h6 class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro provident quidem non repellat sapiente
                                    exercitationem.</h6>
                            </figcaption>
                        </figure>
                        <hr class="mx-5 mt-4" style="border-width: 2px;">
                    </div>
                    <div class="item col-6 mb-1 col-lg-3 p-1 text-center">
                        <figure class="figure figure-portofolio text-center">
                            <img src="{{asset('lib/bootstrap/img/sold.svg')}}" class="figure-img img-fluid icon-fitur mb-3" alt="">
                            <figcaption class="figure-caption text-dark">
                                <h6 class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt perspiciatis perferendis, repudiandae ea culpa
                                    voluptas.</h6>
                            </figcaption>
                        </figure>
                        <hr class="mx-5 mt-4" style="border-width: 2px;">
                    </div>
                </div>
            </div>
        </section>
        <br>
        <!-- akhir fitur -->


        <!-- Properti Terbaru -->
        <section class="terbaru-section">
            <div class="container py-4">
                <div class="row">
                    <div class="col">
                        <h3 class="tittle">Property Terbaru</h3>
                    </div>
                    <div class="col text-right">
                        <a href="" class="btn btn-lainnya btn-sm rounded-pill btn-secondary px-3">Lainnya <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="row">
                    <!-- item -->
                    <div class="item col-6 mb-1 col-lg-3 p-1 px-sm-2 px-lg-2 px-xl-3">
                        <div class="card mx-auto terbaru-card">
                            <a href="#" class="item">
                                <img src="{{asset('lib/bootstrap/img/3.jpg')}}" class="img-fluid terbaru-img d-block mx-auto" alt="gambar 1">
                                <div class="label label-card pl-2">
                                    <p>Rumah</p>
                                </div>
                                <div class="card-body ">
                                    <h6 class="card-subtitle mb-2">Alam Singgahsana</h6>
                                    <h6 class="card-subtitle alamat text-muted">Jl. Raya Cerme</h6><br>
                                    <h5 class="card-title mb-2">Rp. 996 Jt</h5>
                                    <div class="row spesifikasi">
                                        <ul class="float-left">
                                            <li class="item spek active">
                                                <i class="fas fa-bed"> 4</i>
                                            </li>
                                            <li class="item spek">
                                                <i class="fas fa-shower"> 3</i>
                                            </li>
                                            <li class="item spek">
                                                <i class="fas fa-expand-arrows-alt"> 350 m<sup>2</sup></i>
                                            </li>
                                            <li class="item spek">
                                                <i class="fas fa-building"> 2 lt</i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item col-6 mb-1 col-lg-3 p-1 px-sm-2 px-lg-2 px-xl-3">
                        <div class="card mx-auto terbaru-card">
                            <a href="#" class="item">
                                <img src="{{asset('lib/bootstrap/img/3.jpg')}}" class="img-fluid terbaru-img d-block mx-auto" alt="gambar 1">
                                <div class="label label-card pl-2">
                                    <p>Rumah</p>
                                </div>
                                <div class="card-body ">
                                    <h6 class="card-subtitle mb-2">Alam Singgahsana</h6>
                                    <h6 class="card-subtitle alamat text-muted">Jl. Raya Cerme</h6><br>
                                    <h5 class="card-title mb-2">Rp. 996 Jt</h5>
                                    <div class="row spesifikasi">
                                        <ul class="float-left">
                                            <li class="item spek active">
                                                <i class="fas fa-bed"> 4</i>
                                            </li>
                                            <li class="item spek">
                                                <i class="fas fa-shower"> 3</i>
                                            </li>
                                            <li class="item spek">
                                                <i class="fas fa-expand-arrows-alt"> 350 m<sup>2</sup></i>
                                            </li>
                                            <li class="item spek">
                                                <i class="fas fa-building"> 2 lt</i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item col-6 mb-1 col-lg-3 p-1 px-sm-2 px-lg-2 px-xl-3">
                        <div class="card mx-auto terbaru-card">
                            <a href="#" class="item">
                                <img src="{{asset('lib/bootstrap/img/3.jpg')}}" class="img-fluid terbaru-img d-block mx-auto" alt="gambar 1">
                                <div class="label label-card pl-2">
                                    <p>Rumah</p>
                                </div>
                                <div class="card-body ">
                                    <h6 class="card-subtitle mb-2">Alam Singgahsana</h6>
                                    <h6 class="card-subtitle alamat text-muted">Jl. Raya Cerme</h6><br>
                                    <h5 class="card-title mb-2">Rp. 996 Jt</h5>
                                    <div class="row spesifikasi">
                                        <ul class="float-left">
                                            <li class="item spek active">
                                                <i class="fas fa-bed"> 4</i>
                                            </li>
                                            <li class="item spek">
                                                <i class="fas fa-shower"> 3</i>
                                            </li>
                                            <li class="item spek">
                                                <i class="fas fa-expand-arrows-alt"> 350 m<sup>2</sup></i>
                                            </li>
                                            <li class="item spek">
                                                <i class="fas fa-building"> 2 lt</i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item col-6 mb-1 col-lg-3 p-1 px-sm-2 px-lg-2 px-xl-3">
                        <div class="card mx-auto terbaru-card">
                            <a href="#" class="item">
                                <img src="{{asset('lib/bootstrap/img/3.jpg')}}" class="img-fluid terbaru-img d-block mx-auto" alt="gambar 1">
                                <div class="label label-card pl-2">
                                    <p>Rumah</p>
                                </div>
                                <div class="card-body ">
                                    <h6 class="card-subtitle mb-2">Alam Singgahsana</h6>
                                    <h6 class="card-subtitle alamat text-muted">Jl. Raya Cerme</h6><br>
                                    <h5 class="card-title mb-2">Rp. 996 Jt</h5>
                                    <div class="row spesifikasi">
                                        <ul class="float-left">
                                            <li class="item spek active">
                                                <i class="fas fa-bed"> 4</i>
                                            </li>
                                            <li class="item spek">
                                                <i class="fas fa-shower"> 3</i>
                                            </li>
                                            <li class="item spek">
                                                <i class="fas fa-expand-arrows-alt"> 350 m<sup>2</sup></i>
                                            </li>
                                            <li class="item spek">
                                                <i class="fas fa-building"> 2 lt</i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </section>
        <br>
        <!-- akhir Properti terbaru -->


        <!-- tanya properti -->
        <section class="tanyaproperti-selection">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 my-auto">
                        <div class="row">
                            <div class="col text-center">
                                <br>
                                <h3 class="tanyaproperti-title text-dark text-light mb-3">Tanya Properti</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h6 class="py-2 text-dark text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, et. Quam maiores
                                    voluptatem fugit itaque quidem consectetur, vitae, vero in temporibus ab nihil quos deserunt?</h6>
                            </div>
                        </div>
                        <div class="row py-3">
                            <div class="col mx-auto px-0">
                                <form class="text-center">
                                    <input class="form-control form-tanya rounded-pill mx-auto" style="width: 90%;" type="text" placeholder="Tulis Pertanyaan"
                                           aria-label="Search">
                                    <input class="btn btn-tanya text-white btn-md login mx-auto px-4 px-xl-5 my-2 rounded-pill btn-secondary" type="submit"
                                           value="Kirim">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- slider -->
                    <div id="carouselId" class="carousel slide mb-5 col-12 col-lg-6 my-auto" data-ride="carousel">
                        <!-- form cari properti -->

                        <!-- akhir form cari properti -->
                        <ol class="carousel-indicators">
                            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselId" data-slide-to="1"></li>
                            <li data-target="#carouselId" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-slider d-block img-fluid" src="{{asset('lib/bootstrap/img/1.jpg')}}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="img-slider d-block img-fluid" src="{{asset('lib/bootstrap/img/2.jpg')}}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="img-slider d-block img-fluid" src="{{asset('lib/bootstrap/img/3.jpg')}}" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <!-- akhir tanya properti -->


        <!-- portofolio -->
        <section class="section-portofolio">
            <div class="container py-3">
                <hr class="pb-3" style="border-width: 2px;">
                <div class="row">
                    <div class="col">
                        <h3 class="tittle pb-3 text-dark text-center mb-3">Kami Telah Melayani</h3>
                    </div>
                </div>
                <!-- item -->
                <div class="row">
                    <div class="item col-6 mb-1 col-lg-3 p-1 text-center">
                        <figure class="figure figure-portofolio text-center">
                            <img src="{{asset('lib/bootstrap/img/agent.svg')}}" class="figure-img img-fluid icon mb-3" alt="">
                            <figcaption class="figure-caption text-dark">
                                <h4 class="jumlah">500</h4>
                                <h5 class="mb-0">Property Terjual</h5>
                            </figcaption>
                        </figure>
                        <hr class="mx-5 mt-2" style="border-width: 2px;">
                    </div>
                    <div class="item col-6 mb-1 col-lg-3 p-1 text-center">
                        <figure class="figure figure-portofolio text-center">
                            <img src="{{asset('lib/bootstrap/img/agent.svg')}}" class="figure-img img-fluid icon mb-3" alt="">
                            <figcaption class="figure-caption text-dark">
                                <h1 class="jumlah">500</h1>
                                <h5 class="mb-0">Property Disewa</h5>
                            </figcaption>
                        </figure>
                        <hr class="mx-5 mt-2" style="border-width: 2px;">
                    </div>
                    <div class="item col-6 mb-1 col-lg-3 p-1 text-center">
                        <figure class="figure figure-portofolio text-center">
                            <img src="{{asset('lib/bootstrap/img/agent.svg')}}" class="figure-img img-fluid icon mb-3" alt="">
                            <figcaption class="figure-caption text-dark">
                                <h1 class="jumlah">500</h1>
                                <h5 class="mb-0">Orang Berkonsultasi</h5>
                            </figcaption>
                        </figure>
                        <hr class="mx-5 mt-2" style="border-width: 2px;">
                    </div>
                    <div class="item col-6 mb-1 col-lg-3 p-1 text-center">
                        <figure class="figure figure-portofolio text-center">
                            <img src="{{asset('lib/bootstrap/img/agent.svg')}}" class="figure-img img-fluid icon mb-3" alt="">
                            <figcaption class="figure-caption text-dark">
                                <h1 class="jumlah">500</h1>
                                <h5 class="mb-0">Agen</h5>
                            </figcaption>
                        </figure>
                        <hr class="mx-5 mt-2" style="border-width: 2px;">
                    </div>
                </div>
            </div>
        </section>
        <!-- akhir portofolio -->


        <!-- berita dan artikel -->
        <section>
            <div id="rectangle-kuning"></div>
            <div class="container py-5">
                <div class="row">
                    <div class="col">
                        <h3 class="artikel-label text-dark">Berita dan Artikel</h3>
                    </div>
                    <div class="col text-right">
                        <a href="berita.html" class="btn btn-lainnya btn-sm rounded-pill btn-secondary px-3">Lainnya <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="row">
                    <!-- item -->
                    <div class="artikel-item col-6 mb-1 col-lg-4">
                        <figure class="figure border pb-3 bg-white rounded">
                            <img src="{{asset('lib/bootstrap/img/2.jpg')}}" class="figure-img img-fluid rounded" alt="">
                            <figcaption class="figure-caption mb-4 px-3">
                                <h5 class="artikel-title text-dark text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h5>
                            </figcaption>
                            <div class="row">
                                <div class="col-12 col-sm-4 ml-3">
                                    <p class="artikel-tgl text-black-50"><i class="far fa-calendar-alt"></i> 13 Sep 2020</p>
                                </div>
                                <div class="col text-right mr-3">
                                    <a href="artikel.html" class="btn btn-sm rounded-pill btn-secondary">Baca Selengkapnya <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="artikel-item col-6 mb-1 col-lg-4">
                        <figure class="figure border pb-3 bg-white rounded">
                            <img src="{{asset('lib/bootstrap/img/2.jpg')}}" class="figure-img img-fluid rounded" alt="">
                            <figcaption class="figure-caption mb-4 px-3">
                                <h5 class="artikel-title text-dark text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h5>
                            </figcaption>
                            <div class="row">
                                <div class="col-12 col-sm-4 ml-3">
                                    <p class="artikel-tgl text-black-50"><i class="far fa-calendar-alt"></i> 13 Sep 2020</p>
                                </div>
                                <div class="col text-right mr-3">
                                    <a href="" class="btn btn-sm rounded-pill btn-secondary">Baca Selengkapnya <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="artikel-item col-6 mb-1 col-lg-4">
                        <figure class="figure border pb-3 bg-white rounded">
                            <img src="{{asset('lib/bootstrap/img/3.jpg')}}" class="figure-img img-fluid rounded" alt="">
                            <figcaption class="figure-caption mb-4 px-3">
                                <h5 class="artikel-title text-dark text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h5>
                            </figcaption>
                            <div class="row">
                                <div class="col-12 col-sm-4 ml-3">
                                    <p class="artikel-tgl text-black-50"><i class="far fa-calendar-alt"></i> 13 Sep 2020</p>
                                </div>
                                <div class="col text-right mr-3">
                                    <a href="" class="btn btn-sm btn-secondary rounded-pill ">Baca Selengkapnya <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <!-- akhir item -->
                </div>
            </div>
        </section>
        <!-- akhir berita dan artikel -->


        <!-- testimoni -->
        <section class="section-testimoni">
            <div class="container my-3">
                <div class="row text-center">
                    <div class="col-3 text-right quote-title">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="col-6 my-auto">
                        <h3 class="testimoni-title">Cerita Mereka</h3>
                    </div>
                    <div class="col-3 text-left quote-title">
                        <i class="fas fa-quote-right"></i>
                    </div>
                </div>
                <div class="row">
                    <!-- item -->
                    <div class="col-12 mb-1 col-lg-4 testimoni-item">
                        <figure class="figure testimoni-figure">
                            <div class="row mx-3 ">
                                <div class="col-4 mt-3 text-center ">
                                    <img src="{{asset('lib/bootstrap/img/user.png')}}" class="img-testimoni" alt="">
                                </div>
                                <div class="col-6 my-auto pl-0">
                                    <h6 class="testimoni-nama mt-4 mb-0 font-weight-bold">Thoriq Romi</h6>
                                    <p class="testimoni-pekerjaan mx-auto text-muted" style="font-size: small;">Programmer</p>
                                </div>
                                <div class="quote-item col-2 pl-0 my-auto">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <figcaption class="figure-caption">
                                        <div class="figure-caption text-dark text-justify px-3 pt-2">
                                            <p><span class="quote">"</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus tempora quia
                                                deleniti incidunt nesciunt eveniet nam doloribus, ipsum rerum voluptate? <span
                                                    class="font-weight-bold quote">"</span></p>
                                        </div>
                                    </figcaption>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="col-12 mb-1 col-lg-4 testimoni-item">
                        <figure class="figure testimoni-figure">
                            <div class="row mx-3 ">
                                <div class="col-4 mt-3 text-center ">
                                    <img src="{{asset('lib/bootstrap/img/user.png')}}" class="img-testimoni" alt="">
                                </div>
                                <div class="col-6 my-auto pl-0">
                                    <h6 class="testimoni-nama mt-4 mb-0 font-weight-bold">Thoriq Romi</h6>
                                    <p class="testimoni-pekerjaan mx-auto text-muted" style="font-size: small;">Programmer</p>
                                </div>
                                <div class="quote-item col-2 pl-0 my-auto">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <figcaption class="figure-caption">
                                        <div class="figure-caption text-dark text-justify px-3 pt-2">
                                            <p><span class="quote">"</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus tempora quia
                                                deleniti incidunt nesciunt eveniet nam doloribus, ipsum rerum voluptate? <span
                                                    class="font-weight-bold quote">"</span></p>
                                        </div>
                                    </figcaption>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="col-12 mb-1 col-lg-4 testimoni-item">
                        <figure class="figure testimoni-figure">
                            <div class="row mx-3 ">
                                <div class="col-4 mt-3 text-center ">
                                    <img src="{{asset('lib/bootstrap/img/user.png')}}" class="img-testimoni" alt="">
                                </div>
                                <div class="col-6 my-auto pl-0">
                                    <h6 class="testimoni-nama mt-4 mb-0 font-weight-bold">Thoriq Romi</h6>
                                    <p class="testimoni-pekerjaan mx-auto text-muted" style="font-size: small;">Programmer</p>
                                </div>
                                <div class="quote-item col-2 pl-0 my-auto">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <figcaption class="figure-caption">
                                        <div class="figure-caption text-dark text-justify px-3 pt-2">
                                            <p><span class="quote">"</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus tempora quia
                                                deleniti incidunt nesciunt eveniet nam doloribus, ipsum rerum voluptate? <span
                                                    class="font-weight-bold quote">"</span></p>
                                        </div>
                                    </figcaption>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <!-- akhir item -->
                </div>
            </div>
        </section>
        <br><br>
        <!-- akhir testimoni -->


        <!-- berlangganan -->
        <section class="langganan-section">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <br>
                        <h3 class="tanyaproperti-title text-dark text-light mb-3 mt-0 mt-lg-5">Dapatkan Informasi Terbaru Dari Kami</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-10 mx-auto">
                        <h5 class="py-2 text-dark text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, et. Quam maiores voluptatem
                            fugit
                            itaque quidem consectetur, vitae, vero in temporibus ab nihil quos deserunt?</h5>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-12 col-lg-10 mx-auto px-0">
                        <form class="text-center">
                            <input class="form-control form-tanya rounded-pill mx-auto" style="width: 90%;" type="email" placeholder="Masukkan Email Anda"
                                   aria-label="Search">
                            <input class="btn btn-tanya btn-secondary btn-md login mx-auto px-5 my-2 rounded-pill mb-0 mb-lg-5" type="submit" value="Kirim">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- akhir berlangganan -->


        <!-- map -->
        <section>
            <div class="container-fluid p-0">
                <iframe class="d-block mx-auto map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.2627099531546!2d112.61367841432852!3d-7.971778381671958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78834d8f852a43%3A0x5f103ebad0b38246!2sgadai%20syariah%20office!5e0!3m2!1sen!2sid!4v1592989497891!5m2!1sen!2sid"></iframe>
            </div>
        </section>
        <!-- akhir map -->

    </div>
@endsection
