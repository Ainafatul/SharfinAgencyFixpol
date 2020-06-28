<div class="card m-lg-auto" style="padding: 24px 64px;border-top: 0">
    <h2 class="m-3">PANDUAN DAN REFERENSI</h2>
    <div class="card-body" style="margin-bottom: 36px">
        <form action="/onPanduanSearch" method="GET">
            <div class="input-group mb-3">
                <input type="text" name="search" class="form-control" placeholder="Cari" aria-label="Cari"
                       value="<?php if (isset($_GET['search'])) echo $_GET['search']?>" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
                </div>
            </div>
        </form>

        <hr style="margin-bottom: 0">
        <p style="margin-bottom: 12px;font-size: 9pt">Ditemukan <?php echo count($datas)?> Hasil</p>

        @foreach ($datas as $data )
            <div class=" w-100">
                <div class="d-flex flex-row">
                    <img class="card" src="{{ asset('/uploads/PanduandanReferensi/'. $data->image)}}"
                         style="margin-bottom: 0;width:300px;height: 200px;object-fit: cover"
                         alt="Card image cap">
                    <div class="d-flex flex-column" style="padding: 0 12px;width: 100%">
                        <h4 class="card-title">{{$data->title}}</h4>
                    <p class="card-text" style="font-size: 9pt">{{Str::limit($data->content,256)}}</p>
                        <div class="d-flex flex-row row" style="margin-top: auto">
                            <div class="col-6" style="padding-left: 16px">
                                <a href="#" class="btn btn-primary w-100" >Go somewhere</a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="btn btn-danger w-100" >Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
</div>

