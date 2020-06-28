@extends('layout.Main')

@section('content')
    <div>
        <section class="filter-menu">

            <div class="container py-4 ">
                <div class="row ">
                    <div class="col-4 p-0">
                        <div class="form-input">
                            <input class="form-control" type="text" placeholder="Lokasi">
                        </div>
                    </div>
                    <div class="col-2 p-0">
                        <select class="custom-select">
                            <option value="1">Beli</option>
                            <option value="2">Sewa</option>
                        </select>
                    </div>
                    <div class="col-3 p-0">
                        <div class="form-input">
                            <input class="form-control" type="text" placeholder="Harga Min">
                        </div>
                    </div>
                    <div class="col-3 p-0">
                        <div class="form-input">
                            <input class="form-control" type="text" placeholder="Harga Max">
                        </div>
                    </div>
                    <div class="col-4 p-0">
                        <select class="custom-select">
                            <option value="1">Kamar Mandi</option>
                            <option value="2">Semua KM</option>
                            <option value="3">1 KM</option>
                            <option value="4">2 KM</option>
                            <option value="5">3 KM</option>
                            <option value="6">4 KM</option>
                            <option value="7">5 KM</option>
                            <option value="8">6 KM</option>
                            <option value="9">>6 KM</option>
                        </select>
                    </div>
                    <div class="col-4 p-0">
                        <select class="custom-select">
                            <option value="1">Kamar Tidur</option>
                            <option value="2">Semua KT</option>
                            <option value="3">1 KT</option>
                            <option value="4">2 KT</option>
                            <option value="5">3 KT</option>
                            <option value="6">4 KT</option>
                            <option value="7">5 KT</option>
                            <option value="8">6 KT</option>
                            <option value="9">>6 KT</option>
                        </select>
                    </div>
                    <div class="col-4 p-0">
                        <select class="custom-select">
                            <option value="1">Luas Tanah</option>
                            <option value="2">Semua</option>
                            <option value="3">50 m2</option>
                            <option value="4">100 m2</option>
                            <option value="5">200 m2</option>
                            <option value="6">300 m2</option>
                            <option value="7">400 m2</option>
                            <option value="8">500 m2</option>
                            <option value="9">>500 m2</option>
                        </select>
                    </div>
                    <div class="row mx-auto mt-3 ">
                        <div class="col ">
                            <input class="btn rounded-pill btn-secondary btn-lainnya px-5" type="submit" value="Cari">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="">

            <div class="container py-4">
                <div class="row">
                    <div class="col">
                        <h3 class="tittle">Property </h3>
                    </div>
                    <div class="col-2 text-right">
                        <select class="custom-select">
                            <option value="1">Filter</option>
                            <option value="2">Harga Terrendah</option>
                            <option value="3">Harga Tertinggi</option>
                            <option value="4">Tanah Terluas</option>
                            <option value="5">Tanah Terkecil</option>
                            <option value="6">Terbaru</option>
                            <option value="7">Terlama</option>
                        </select>
                    </div>
                </div>
                <!-- item -->
                <div class="row">
                    <div class="item col mb-1 p-1 ">
                        <div class="card card-jual">
                            <a href="preview.html" class="item-jual">
                                <div class="row ">
                                    <div class="col-4 my-auto">
                                        <img src="bootstrap/img/1.jpg" class="img-fluid img-jual d-block mx-auto" alt="gambar 1">
                                    </div>
                                    <div class="col-lg-5 col-4 pl-0 my-auto">
                                        <div class="card-body pl-0">
                                            <h5 class="card-subtitle judul-jual mb-2 disingkat">Alam Singgahsana</h5>
                                            <h6 class="card-subtitle alamat-jual text-secondary mb-xl-2 mb-sm-3 mb-0 disingkat">Jl. Raya Cerme</h6><br>
                                            <h5 class="card-title-jual mb-2">Rp. 996 Jt</h5>
                                            <div class="row spesifikasi-jual">
                                                <ul class="float-left disingkat">
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
                                            <div class="label label-jual mt-3 mt-sm-4 mb-0">
                                                <p class="pl-2 py-0">Kontrakan</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-lg-3 col-4">
                                        <div class="card py-2 card-jual-agen bg-light ">
                                            <figure class="figure figure-portofolio text-center my-auto">
                                                <img src="bootstrap/img/user.png" class="figure-img img-fluid img-jual-agen icon-fitur mb-2">
                                                <h6 class="card-subtitle mb-2 disingkat">Thoriq Romi</h6>
                                                <h6 class="card-subtitle alamat text-secondary disingkat ">Thoriq Agency</h6><br>
                                                <hr class="mx-0 mt-0 mb-2" style="border-width: 2px;">
                                                <div class="row mx-0 mx-sm-1">
                                                    <div class="col-12 mb-2">
                                                        <div class="btn-group-toggle" data-toggle="buttons">
                                                            <label class="btn btn-sm btn-outline-danger py-0 py-sm-1 btn-block">
                                                                <input type="checkbox"> <i class="far fa-heart "></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 ">
                                                        <button type="button" class="btn disingkat btn-sm btn-nomoragen btn-info px-1 px-lg-3 py-sm-1 btn-block"
                                                                href="landingpage.html"><i class="fas fa-phone-alt"> </i> 085123456789
                                                        </button>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="item col mb-1 p-1 ">
                        <div class="card card-jual">
                            <a href="preview.html" class="item-jual">
                                <div class="row ">
                                    <div class="col-4 my-auto">
                                        <img src="bootstrap/img/2.jpg" class="img-fluid img-jual d-block mx-auto" alt="gambar 1">
                                    </div>
                                    <div class="col-lg-5 col-4 pl-0 my-auto">
                                        <div class="card-body pl-0">
                                            <h5 class="card-subtitle judul-jual mb-2 disingkat">Alam Singgahsana</h5>
                                            <h6 class="card-subtitle alamat-jual text-secondary mb-xl-2 mb-sm-3 mb-0 disingkat">Jl. Raya Cerme</h6><br>
                                            <h5 class="card-title-jual mb-2">Rp. 996 Jt</h5>
                                            <div class="row spesifikasi-jual">
                                                <ul class="float-left disingkat">
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
                                            <div class="label label-jual mt-3 mt-sm-4 mb-0">
                                                <p class="pl-2 py-0">Kontrakan</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-lg-3 col-4">
                                        <div class="card py-2 card-jual-agen bg-light ">
                                            <figure class="figure figure-portofolio text-center my-auto">
                                                <img src="bootstrap/img/user.png" class="figure-img img-fluid img-jual-agen icon-fitur mb-2">
                                                <h6 class="card-subtitle mb-2 disingkat">Thoriq Romi</h6>
                                                <h6 class="card-subtitle alamat text-secondary disingkat ">Thoriq Agency</h6><br>
                                                <hr class="mx-0 mt-0 mb-2" style="border-width: 2px;">
                                                <div class="row mx-0 mx-sm-1">
                                                    <div class="col-12 mb-2">
                                                        <div class="btn-group-toggle" data-toggle="buttons">
                                                            <label class="btn btn-sm btn-outline-danger py-0 py-sm-1 btn-block">
                                                                <input type="checkbox"> <i class="far fa-heart "></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 ">
                                                        <button type="button" class="btn disingkat btn-sm btn-nomoragen btn-info px-1 px-lg-3 py-sm-1 btn-block"
                                                                href="landingpage.html"><i class="fas fa-phone-alt"> </i> 085123456789
                                                        </button>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="item col mb-1 p-1 ">
                        <div class="card card-jual">
                            <a href="preview.html" class="item-jual">
                                <div class="row ">
                                    <div class="col-4 my-auto">
                                        <img src="bootstrap/img/3.jpg" class="img-fluid img-jual d-block mx-auto" alt="gambar 1">
                                    </div>
                                    <div class="col-lg-5 col-4 pl-0 my-auto">
                                        <div class="card-body pl-0">
                                            <h5 class="card-subtitle judul-jual mb-2 disingkat">Alam Singgahsana</h5>
                                            <h6 class="card-subtitle alamat-jual text-secondary mb-xl-2 mb-sm-3 mb-0 disingkat">Jl. Raya Cerme</h6><br>
                                            <h5 class="card-title-jual mb-2">Rp. 996 Jt</h5>
                                            <div class="row spesifikasi-jual">
                                                <ul class="float-left disingkat">
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
                                            <div class="label label-jual mt-3 mt-sm-4 mb-0">
                                                <p class="pl-2 py-0">Kontrakan</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-lg-3 col-4">
                                        <div class="card py-2 card-jual-agen bg-light ">
                                            <figure class="figure figure-portofolio text-center my-auto">
                                                <img src="bootstrap/img/user.png" class="figure-img img-fluid img-jual-agen icon-fitur mb-2">
                                                <h6 class="card-subtitle mb-2 disingkat">Thoriq Romi</h6>
                                                <h6 class="card-subtitle alamat text-secondary disingkat ">Thoriq Agency</h6><br>
                                                <hr class="mx-0 mt-0 mb-2" style="border-width: 2px;">
                                                <div class="row mx-0 mx-sm-1">
                                                    <div class="col-12 mb-2">
                                                        <div class="btn-group-toggle" data-toggle="buttons">
                                                            <label class="btn btn-sm btn-outline-danger py-0 py-sm-1 btn-block">
                                                                <input type="checkbox"> <i class="far fa-heart "></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 ">
                                                        <button type="button" class="btn disingkat btn-sm btn-nomoragen btn-info px-1 px-lg-3 py-sm-1 btn-block"
                                                                href="landingpage.html"><i class="fas fa-phone-alt"> </i> 085123456789
                                                        </button>
                                                    </div>
                                                </div>
                                            </figure>
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
    </div>
@endsection
