<!-- berita dan artikel -->
@extends('layout.Main')

@section('content')
    <section>
        <div id="rectangle-kuning"></div>
        <div class="container py-5">
            <div class="row">
                <div class="item col mb-2 p-1 ">
                    <div class="card card-detail-agen mx-2 mx-sm-0">
                        <div class="row">
                            <div class="col-12 mt-auto">
                                <div class="row">
                                    <div class="col-5 col-md-4 col-lg-3 my-auto text-center py-3">
                                        <img src="{{asset($agent->picture)}}" class="figure-img img-fluid img-detail-agen icon-fitur ml-2 ml-sm-0">
                                    </div>
                                    <div class="col my-auto subtitle-agen ">
                                        <h4 class="card-subtitle mb-3 disingkat">{{$agent->name}}</h4>
                                        <h6 class="card-subtitle text-dark disingkat ">{{$agent->agency}}</h6><br>
                                        <h5 class="card-subtitle mt-3 disingkat ">{{count(\App\Property::where('agent',$agent->id)->get())}} Listing</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 my-auto">
                                <div class="card py-2 card-detail-nomoragen bg-light ">
                                    <figure class="figure figure-portofolio my-auto mx-3 ">
                                        <p class="mb-1">Hubungi</p>
                                        <button type="button" class="btn disingkat btn-sm btn-nomoragen btn-info px-4 py-sm-1 ">
                                            <i class="fas fa-phone-alt"> </i> {{$agent->phone}}
                                        </button>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir berita dan artikel -->

    <!-- detail -->
    <section class="product-description pb-5">
        <div class="container mb-0">
            <div class="row">
                <div class="col">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="detail-tab" data-toggle="tab" href="#detail" role="tab" aria-controls="detail" aria-selected="false">Detail</a>
                        </li>
                    </ul>
                    <div class="tab-content p-3" id="myTabContent">
                        <div class="tab-pane fade show active product-review" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
                        <div class="tab-pane fade  product-review" id="detail" role="tabpanel" aria-labelledby="detail-tab">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="row">
                                        <div class="col">
                                            <p class="small mb-3 text-secondary">Pelayanan</p>
                                            <p class="mb-0 text-dark"><i class="fas fa-check"></i> Penyewaan Apartemen</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="mb-0 text-dark"><i class="fas fa-check"></i> Penyewaan Rumah</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="mb-0 text-dark"><i class="fas fa-check"></i> Penjualan Apartemen</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="mb-0 text-dark"><i class="fas fa-check"></i> Penjualan Rumah</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div><div class="row">
                                        <div class="col">
                                            <p class="mb-0 text-dark"><i class="fas fa-check"></i> Konsultan Proeerty</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="row">
                                        <div class="col">
                                            <p class="small mb-3 text-secondary">Wilayah</p>
                                            <p class="mb-0 text-dark"><i class="fas fa-map-marker-alt"></i> Jawa Timur</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="mb-0 text-dark"><i class="fas fa-map-marker-alt"></i> Bali</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="mb-0 text-dark"><i class="fas fa-map-marker-alt"></i> Jawa Tengah</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="mb-0 text-dark"><i class="fas fa-map-marker-alt"></i> DI Yogyakarta</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mt-0" style="border-width: 2px;">
        </div>
    </section>
    <!-- akhir detail -->

    <!-- property terkait -->
    <section class="section-agen">
        <div class="container py-4">
            <div class="row">
                <div class="col">
                    <h3 class="tittle">Listing</h3>
                </div>
                <div class="col text-right">
                    <a href="" class="btn btn-lainnya btn-sm rounded-pill btn-secondary px-3">Lainnya <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            @foreach(\App\Property::where('agent',$agent->id)->get() as $property)
                <div class="row">
                    <div class="item col mb-1 p-1 ">
                        <div class="card card-jual">
                            <a href="{{route('PropertyDetail',['id'=>$property->id])}}" class="item-jual">
                                <div class="row ">
                                    <div class="col-4 my-auto">
                                        <img src="{{asset($property->main_image)}}" class="img-fluid img-jual d-block mx-auto" alt="gambar 1">
                                    </div>
                                    <div class="col-lg-5 col-4 pl-0 my-auto">
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
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div><br>
    </section>
    <!-- akhir property terkait -->
@endsection
