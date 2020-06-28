@extends('layout.Main')

@section('content')
    <section>
        <div id="rectangle-kuning"></div>
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <h3 class="artikel-label text-dark">Berita dan Artikel</h3>
                </div>
            </div>
            <div class="row">
                @foreach ($datas ?? '' as $data)
                    <div class="artikel-item col-6 mb-1 col-lg-4">
                        <figure class="figure border pb-3 bg-white rounded">
                            <img src="{{asset('uploads/artikel/'.$data->image)}}" class="figure-img img-fluid rounded">
                            <figcaption class="figure-caption mb-4 px-3">
                                <h5 class="artikel-title text-dark text-justify">{{$data->title}}</h5>
                            </figcaption>
                            <div class="row">
                                <div class="col-12 col-sm-4 ml-3">
                                    <p class="artikel-tgl text-black-50"><i class="far fa-calendar-alt">{{date('j M Y',strtotime($data->created_at))}}</i></p>
                                </div>
                                <div class="col text-right mr-3">
                                    <a href="{{route('Artikel',[['id']=>$data->id])}}" class="btn btn-sm rounded-pill btn-secondary">Baca Selengkapnya <i
                                            class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </figure>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- akhir berita dan artikel -->

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
                    <h5 class="py-2 text-dark text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, et. Quam maiores voluptatem fugit
                        itaque quidem consectetur, vitae, vero in temporibus ab nihil quos deserunt?</h5>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-12 col-lg-10 mx-auto px-0">
                    <form class="text-center">
                        <input class="form-control form-tanya rounded-pill mx-auto" name="email" style="width: 90%;" type="email"
                               placeholder="Masukkan Email Anda"
                               aria-label="Search">
                        <a href="{{route('')}}" class="btn btn-tanya btn-secondary btn-md login mx-auto px-5 my-2 rounded-pill mb-0 mb-lg-5"
                           type="submit">Kirim</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
