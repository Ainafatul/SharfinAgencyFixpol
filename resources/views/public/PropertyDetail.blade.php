@extends('layout.Main')

@section('content')
    <section>
        <div id="rectangle-kuning"></div>
        <div class="container pb-5">
            <div class="card ">
                <div class="row">
                    <div class="col my-auto">
                        <div class="bg-dark">
                            <!-- slider -->
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    @foreach(explode(',',$property->image) as $image)
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                            class="@if(explode(',',$property->image)[0] == $image) active @endif"></li>
                                    @endforeach
                                </ol>
                                <div class="carousel-inner ">
                                    @foreach(explode(',',$property->image) as $image)
                                        <div class="carousel-item @if(explode(',',$property->image)[0] == $image) active @endif"
                                             style="height: 500px;object-fit: cover">
                                            <img src="{{asset($image)}}" class="d-block mx-auto img-detail" alt="...">
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- akhir slider -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-9 my-auto">
                        <div class="card-body pl-3">
                            <div class="card-body pl-0">
                                <h5 class="card-subtitle judul-jual mb-2 disingkat">{{$property->name}}</h5>
                                <h6 class="card-subtitle alamat-jual text-secondary mb-xl-2 mb-sm-3 mb-0 disingkat">{{$property->address}}</h6>
                                <br>
                                <h5 class="card-title-jual mb-2">Rp. 996 Jt</h5>
                                <div class="row spesifikasi-jual" style="margin-left: 16px">
                                    <ul class="disingkat row w-100">
                                        <li class="item spek col-3">
                                            <i class="fas fa-bed"> {{$property->bed_room}}</i>
                                        </li>
                                        <li class="item spek col-3">
                                            <i class="fas fa-shower">{{$property->bath_room}}</i>
                                        </li>
                                        <li class="item spek col-3">
                                            <i class="fas fa-expand-arrows-alt">{{$property->land_area}} m<sup>2</sup></i>
                                        </li>
                                        <li class="item spek col-3">
                                            <i class="fas fa-building">{{$property->stories}} lt</i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="label label-jual mt-3 mt-sm-4 mb-0" style="width: 200px">
                                    <p class="pl-2 py-0">@if($property->isSell == 1)
                                            Dijual @endif @if($property->isSell == 1 && $property->isRent == 1)
                                            & @endif @if($property->isRent == 1) Disewakan @endif</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-4">
                        <div class="card py-2 card-jual-agen bg-light ">
                            <figure class="figure figure-portofolio text-center my-auto">
                                @php($agent = \App\Agent::find($property->agent))
                                <img src="{{asset($agent->picture)}}" class="figure-img img-fluid img-jual-agen icon-fitur mb-2">
                                <h6 class="card-subtitle mb-2 disingkat">{{$agent->name}}</h6>
                                <h6 class="card-subtitle alamat text-secondary disingkat ">{{$agent->agency}}</h6><br>
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
                                        <button type="button"
                                                class="btn disingkat btn-sm btn-nomoragen btn-info px-1 px-lg-3 py-sm-1 btn-block"
                                                href="landingpage.html"><i class="fas fa-phone-alt"> </i> {{$agent->phone}}
                                        </button>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir berita dan artikel -->

    <!-- detail -->
    <section class="product-description p-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="detail-tab" data-toggle="tab" href="#detail" role="tab" aria-controls="detail" aria-selected="true">Detail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="deskripsi-tab" data-toggle="tab" href="#deskripsi" role="tab" aria-controls="deskripsi"
                               aria-selected="false">Deskripsi</a>
                        </li>
                    </ul>
                    <div class="tab-content p-3" id="myTabContent">
                        <div class="tab-pane fade show active product-review" id="detail" role="tabpanel" aria-labelledby="detail-tab">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="row">
                                        <div class="col">
                                            <p class="small mb-1 text-secondary">Tipe</p>
                                            <p class="mb-0 text-dark">Rumah Dijual</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="small mb-1 text-secondary">Luas Bangunan</p>
                                            <p class="mb-0 text-dark">350 m<sup>2</sup></p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="small mb-1 text-secondary">Luas Tanah</p>
                                            <p class="mb-0 text-dark">400 m<sup>2</sup></p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="small mb-1 text-secondary">Interior</p>
                                            <p class="mb-0 text-dark">Kososng</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="small mb-1 text-secondary">Lantai</p>
                                            <p class="mb-0 text-dark">3</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="small mb-1 text-secondary">Listrik</p>
                                            <p class="mb-0 text-dark">3500 Watt</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="small mb-1 text-secondary">Tempat Parkir</p>
                                            <p class="mb-0 text-dark">2</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="row">
                                        <div class="col">
                                            <p class="small mb-1 text-secondary">Sertifikat</p>
                                            <p class="mb-0 text-dark">SHM</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="small mb-1 text-secondary">Pengembangan</p>
                                            <p class="mb-0 text-dark">-</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="small mb-1 text-secondary">Per M<sup>2</sup></p>
                                            <p class="mb-0 text-dark">Rp. 1.758.7957</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="small mb-1 text-secondary">Tahun Dibuat</p>
                                            <p class="mb-0 text-dark">2020</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="small mb-1 text-secondary">Id Listing</p>
                                            <p class="mb-0 text-dark">1242143</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="small mb-1 text-secondary">Terdaftar Pada</p>
                                            <p class="mb-0 text-dark">1 hr yang lalu</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="small mb-1 text-secondary">Interior</p>
                                            <p class="mb-0 text-dark">Multiple options available</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade product-review" id="deskripsi" role="tabpanel" aria-labelledby="deskripsi-tab">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus temporibus non soluta
                                tempora accusamus libero eum error iusto sed sunt dolor repellendus facilis magni reprehenderit
                                obcaecati nesciunt laboriosam officia, ex quae corrupti? Mollitia, voluptate possimus! Unde quia
                                maxime nisi nihil fuga quasi corporis blanditiis ducimus quam, exercitationem suscipit sapiente quas
                                expedita, rerum iste fugiat est nemo quis! Earum facere odit magnam dicta dolores reiciendis error nobis
                                delectus, itaque facilis corrupti similique, blanditiis porro quis, iusto tenetur expedita neque odio
                                consectetur officia autem. Adipisci, aliquam totam dolore nam modi animi odio cumque molestiae consequatur
                                culpa cupiditate voluptatem mollitia incidunt, quisquam reiciendis.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec felis metus. Vivamus eu urna
                                tempor, pretium erat quis, volutpat eros. Cras consectetur dolor at venenatis feugiat. Fusce
                                nunc risus, finibus eget augue ac, ornare gravida turpis. Morbi consequat, nisi sit amet viverra
                                feugiat, lacus mauris ornare erat, at pharetra odio dolor id elit. Pellentesque eu aliquet ex.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia obcaecati saepe laboriosam cumque sed,
                                aliquid pariatur totam corporis labore molestiae porro accusantium quaerat nesciunt eligendi distinctio
                                impedit illum eius dicta laborum facilis. Delectus nam omnis nisi adipisci quo, voluptates vitae labore
                                distinctio aperiam explicabo quam eos voluptate totam doloremque esse ad ipsum nobis culpa. Commodi ipsa
                                provident ea accusantium, at voluptate, tempore sit enim nihil mollitia quo deleniti molestias, consequuntur
                                earum aperiam est id incidunt molestiae tenetur rerum. Commodi tempore inventore suscipit laudantium amet
                                unde voluptates, culpa numquam provident nemo illo saepe harum recusandae ratione magni temporibus aliquam
                                totam aperiam.</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="pb-3" style="border-width: 2px;">
        </div>
    </section>
    <!-- akhir detail -->

    <!-- property terkait -->
    <section class="terbaru-section">
        <div class="container py-4">
            <div class="row">
                <div class="col">
                    <h3 class="tittle">Property Terkait</h3>
                </div>
                <div class="col text-right">
                    <a href="" class="btn btn-lainnya btn-sm rounded-pill btn-secondary px-3">Lainnya <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="row">
                <!-- item -->
                @php($i = 0)
                @foreach(\App\Property::where('agent',$agent->id)->get() as $property)
                    @if($i <4)
                        <div class="item col-md-6 mb-1 col-lg-3 p-1 px-sm-2 px-lg-2 px-xl-3">
                            <div class="card mx-auto terbaru-card">
                                <a href="{{route('PropertyDetail',['id'=>$property->id])}}" class="item">
                                    <img src="{{asset($property->main_image)}}" class="img-fluid terbaru-img d-block mx-auto" alt="gambar 1"
                                         style="height: 200px">
                                    <div class="label label-card pl-2"><p style="font-size: 14px">Rumah</p></div>
                                    <div class="card-body ">
                                        <h6 class="card-subtitle mb-2" style="height: 32px">{{$property->name}}</h6>
                                        <h6 class="card-subtitle alamat text-muted limit-2" style="height: 32px">{{$property->address}}</h6><br>
                                        <h5 class="card-title mb-2">Rp. {{'Harga'}} Jt</h5>
                                        <div class="row spesifikasi w-100" style="margin-left: 0;margin-bottom: 0px">
                                            <li class="col-3 item spek">
                                                <i class="fas fa-bed">{{'  '.$property->bed_room}}</i>
                                            </li>
                                            <li class="col-3 item spek">
                                                <i class="fas fa-shower">{{'  '.$property->bath_room}}</i>
                                            </li>
                                            <li class="col-3 item spek">
                                                <i class="fas fa-expand-arrows-alt"> {{$property->land_area}} m<sup>2</sup></i>
                                            </li>
                                            <li class="col-3 item spek">
                                                <i class="fas fa-building"> {{$property->stories}} lt</i>
                                            </li>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @php($i++)
                    @endif
                @endforeach
            </div>
        </div>
        <br>
    </section>
@endsection
