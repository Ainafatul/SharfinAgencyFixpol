<div class="card  m-lg-auto" style="padding: 24px 64px;border-top: 0">
    @php($datas = \App\Http\Controllers\AgentController::getProperties())
    @for($i = 0 ; $i<count($datas) ; $i+=3)
        <div class="card-deck" style="margin-bottom: 36px">
            @for($x = $i ; $x<($i+3);$x++)
                @if($x<count($datas))
                    @php($data = $datas[$x])
                    <div class="card">
                        <img class="card-img-top" style="object-fit: cover;height: 300px" src="{{asset('uploads/property/'.$data->main_image)}}"
                             alt="Card image cap">
                        <div class="card-body d-flex flex-column" style="padding-top: 12px">
                            <h5 class="card-title" style="margin-bottom: 0px">{{$data->name}}</h5>
                            <div class="row" style="padding-left: 12px">
                                @if($data->isJual)
                                    <span class="badge badge-primary" style="padding: 4px 12px;margin-left: 0px">Jual</span>
                                @endif
                                @if($data->isSewa)
                                    <span class="badge badge-success" style="padding: 4px 12px;margin-left: 0px">Sewa</span>
                                @endif
                            </div>
                            <p class="card-text" style="font-size: 9pt;margin-top: 4px">{{Str::limit($data->keterangan,192)}}</p>
                            <p class="card-text"><small class="text-muted">Created {{$data->created_at}}</small></p>
                            <div class="row mt-auto ">
                                <div class="col-6 w-100" style="padding-left: 8px;padding-right: 4px">
                                    <a href="/Dashboard/Property/{{$data->id}}/Update" class="btn btn-primary w-100" style="font-size: 11px">Ubah
                                        Property</a>
                                </div>
                                <div class="col-6 w-100" style="padding-right: 8px;padding-left: 4px">
                                    <a href="/Dashboard/Property/{{$data->id}}/Delete" class="btn btn-danger w-100" style="font-size: 11px">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endfor
        </div>
    @endfor
</div>