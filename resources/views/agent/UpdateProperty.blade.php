<link rel="stylesheet" href="{{ URL::asset('css/property.css') }}"/>
<article class="container page-container">
    <div style="padding-bottom: 100px;padding-top: 50px">
        <div class="card">
            <div class="card-body" style="margin-bottom: 36px">
                <form class="m-lg-auto" action="/Dashboard/onUpdateProperty" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="margin: 24px 8px">
                        <h1 class="display-4">Change Property Detail</h1>
                        <hr>
                    </div>
                    <input type="text" class="form-control" id="name" name="id" hidden value="{{$datas->id}}">
                    <div style="padding: 0 6%">
                        <div class="form-group">
                            <label for="nm_property">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$datas->name}}">
                        </div>
                    </div>

                    <p class="lead" style="padding-top: 24px">Fasilitas Bangunan Asset</p>
                    <hr class="my-4">

                    <div style="padding: 0 6%">
                        <div class="form-group">
                            <label for="bath_room">Kamar Mandi</label>
                            <input type="number" class="form-control" id="bath_room" name="bath_room" value="{{$datas->bath_room}}">
                        </div>
                        <div class="form-group">
                            <label for="bed_room">Kamar Tidur</label>
                            <input type="number" class="form-control" id="bed_room" name="bed_room" value="{{$datas->bed_room}}">
                        </div>
                        <div class="form-group">
                            <label for="stories">Jumlah Lantai</label>
                            <input type="number" class="form-control" id="stories" name="stories" value="{{$datas->stories}}">
                        </div>
                    </div>

                    <p class="lead" style="padding-top: 24px">Detail Asset</p>
                    <hr class="my-4">

                    <div style="padding: 0 6%">
                        <div class="form-group">
                            <label for="land_area">Luas Tanah</label>
                            <input type="number" class="form-control" id="land_area" name="land_area" value="{{$datas->land_area}}">
                        </div>
                        <div class="form-group">
                            <label for="building_area">Luas Bangunan (M<sup><span style="font-size: 0.8em">2</span></sup>)</label>
                            <input type="number" class="form-control" id="building_area" name="building_area" value="{{$datas->building_area}}">
                        </div>

                        <div class="card">
                            <div class="form-group form-check">
                                <div class="row" style="padding: 12px 24px;">
                                    <div class="col-6">
                                        <input type="checkbox" <?php  if ($datas->isSell) echo "checked" ?> class="form-check-input" id="isSell" name="isSell">
                                        <label class="form-check-label" for="exampleCheck1">Jual</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="checkbox" <?php  if ($datas->isRent) echo "checked" ?> class="form-check-input" id="isRent" name="isRent">
                                        <label class="form-check-label" for="exampleCheck1">Sewa</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding-left: 24px;padding-right: 24px">
                                <div class="col-6" id="detailPenjualan" hidden>
                                    <div class="card w-100">
                                        <div class="card-body">
                                            <h5 class="card-title">Harga Jual</h5>
                                            <div class="form-group">
                                                <label for="sub_district">Harga</label>
                                                <input type="number" min="0.00" max="1000000000000.00" step="0.01" class="form-control" id="price"
                                                       name="price" value="{{$datas->price}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6" id="detailPenyewaan" hidden>
                                    <div class="card w-100">
                                        <div class="card-body">
                                            <h5 class="card-title">Harga Sewa</h5>
                                            <div class="form-group">
                                                <label for="price">Harga</label>
                                                <input type="number" min="0.00" max="1000000000000.00" step="0.01" class="form-control" id="price"
                                                       name="price" value="{{$datas->price}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="minRent">Minimal Sewa</label>
                                                <input type="number" class="form-control" id="minRent" name="minRent" value="{{$datas->minRent}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="typeRent">Jenis Sewa</label>
                                                <input type="text" class="form-control" id="typeRent" name="typeRent" value="{{$datas->typeRent}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="lead" style="padding-top: 24px">Alamat Property</p>
                    <hr class="my-4">

                    <div style="padding: 0 6%">
                        <div class="row w-100">
                            <div class="col-3">
                                <label for="province">Province</label>
                                <select class="custom-select mr-sm-2" id="province" name="province"></select>
                            </div>
                            <div class="col-3">
                                <label for="city">City</label>
                                <select class="custom-select mr-sm-2" id="city" name="city"></select>
                            </div>
                            <div class="col-3">
                                <label for="district">District</label>
                                <select class="custom-select mr-sm-2" id="district" name="district"></select>
                            </div>
                            <div class="col-3">
                                <label for="sub_district">Sub District</label>
                                <select class="custom-select mr-sm-2" id="sub_district" name="sub_district"></select>
                            </div>
                        </div>
                        <div class="form-group" style="margin-top: 12px">
                            <label for="address">Alamat Lengkap</label>
                            <textarea type="text" class="form-control" id="address" rows="5" name="address">{{$datas->address}}</textarea>
                        </div>
                    </div>

                    <p class="lead" style="padding-top: 24px">Informasi Tambahan</p>
                    <hr class="my-4">

                    <div style="padding: 0 6%">
                        <div class="form-group">
                            <label for="description">Keterangan</label>
                            <textarea type="text" class="form-control" id="description" name="description" rows="7">{{$datas->description}}</textarea>
                        </div>
                        <label for="uploadImage">Photo</label>
                        <div>
                            <div class="list-group list-group-horizontal-xl d-flex justify-content-center h-auto">
                                <ul class="list-group list-group-horizontal-sm d-flex justify-content-center">
                                    @if(count(explode(",",$datas->image))>0)
                                        <li class="list-group-item card d-flex justify-content-center" style="width: 200px;height: 200px;padding: 0">
                                            <img id="img0" class="card-img" src="{{asset('uploads/property/'.explode(",",$datas->image)[0])}}">
                                        </li>
                                    @endif
                                    @if(count(explode(",",$datas->image))>1)
                                        <li class="list-group-item card d-flex justify-content-center" style="width: 200px;height: 200px;padding: 0">
                                            <img id="img1" class="card-img" src="{{asset('uploads/property/'.explode(",",$datas->image)[1])}}">
                                        </li>
                                    @endif
                                </ul>
                                <ul class="list-group list-group-horizontal-sm d-flex justify-content-center">
                                    @if(count(explode(",",$datas->image))>2)
                                        <li class="list-group-item card" style="width: 200px;height: 200px;padding: 0">
                                            <img id="img2" class="card-img d-flex justify-content-center"
                                                 src="{{asset('uploads/property/'.explode(",",$datas->image)[2])}}">
                                        </li>
                                    @endif
                                    @if(count(explode(",",$datas->image))>3)
                                        <li class="list-group-item card" style="width: 200px;height: 200px;padding: 0">
                                            <img id="img3" class="card-img d-flex justify-content-center"
                                                 src="{{asset('uploads/property/'.explode(",",$datas->image)[3])}}">
                                        </li>
                                    @endif
                                </ul>
                            </div>
                            <div class="list-group list-group-horizontal-xl d-flex justify-content-center" style="margin-bottom: 24px">
                                <ul class="list-group list-group-horizontal-sm d-flex justify-content-center">

                                    @if(count(explode(",",$datas->image))>4)
                                        <li class="list-group-item card d-flex justify-content-center" style="width: 200px;height: 200px;padding: 0">
                                            <img id="img4" class="card-img"
                                                 src="{{asset('uploads/property/'.explode(",",$datas->image)[4])}}">
                                        </li>
                                    @endif
                                    @if(count(explode(",",$datas->image))>5)
                                        <li class="list-group-item card d-flex justify-content-center" style="width: 200px;height: 200px;padding: 0">
                                            <img id="img5" class="card-img"
                                                 src="{{asset('uploads/property/'.explode(",",$datas->image)[5])}}">
                                        </li>                                    @endif
                                </ul>
                                <ul class="list-group list-group-horizontal-sm d-flex justify-content-center">
                                    @if(count(explode(",",$datas->image))>6)
                                        <li class="list-group-item card d-flex justify-content-center" style="width: 200px;height: 200px;padding: 0">
                                            <img id="img6" class="card-img"
                                                 src="{{asset('uploads/property/'.explode(",",$datas->image)[6])}}">
                                        </li>
                                    @endif
                                </ul>
                                <ul class="list-group list-group-horizontal-sm d-flex justify-content-center">
                                    <li class="list-group-item card d-flex justify-content-center" style="width: 200px;height: 200px;padding: 0">
                                        <span class="btn btn-primary btn-file h-100 w-100" style="text-align: center;padding-top: 44%"> Tambah Image <input
                                                id="uploadImage" name="image[]" accept="image/*" type="file" multiple></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <button style="margin-top: 24px" class="btn btn-primary w-100" id="submit" type="submit">Daftarkan Property</button>
                </form>
            </div>
        </div>
    </div>
</article>
<style>
    .btn-file {
        position: relative;
        overflow: hidden;
    }

    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        cursor: inherit;
        display: block;
    }
</style>
<script>

    function test() {
        $('#detailPenjualan').attr('hidden', !$($('#isJual')).is(':checked'))
        $('#detailPenyewaan').attr('hidden', !$($('#isSewa')).is(':checked'))
    }

    test()

    $('#isJual').change(function () {
        $('#detailPenjualan').attr('hidden', !$(this).is(':checked'))
    });
    $('#isSewa').change(function () {
        $('#detailPenyewaan').attr('hidden', !$(this).is(':checked'))
    });

    function preview_image(event, img, index) {
        let reader = new FileReader();
        reader.onload = function () {
            let output = document.getElementById(img);
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[index]);
    }

    $('#uploadImage').change(function (event) {
        const input = document.getElementById('uploadImage');
        if (input.files.length <= 7) {
            $('#maxPicture').text('Okey Lur');
            $('#submit').attr('disabled', false)
            for (let i = 0; i < input.files.length; i++) {
                preview_image(event, 'img' + i, i)
            }
        } else {
            $('#maxPicture').text('Limit e 7 Dulur ku Sayang');
            $('#submit').attr('disabled', true)
        }
    });

    const server = "http://10.10.10.16:8000/";
    $.getJSON(server + "getProvinces", function (result) {
        $.each(result, function (i, field) {
            const option = document.createElement("option");
            option.value = field.id;
            option.text = field.name;
            document.getElementById("province").add(option);
        });
    });

    $('#province').change(function () {
        const selectedID = this.options[this.selectedIndex].value;
        $.getJSON(server + "getCities/" + selectedID, function (result) {
            $('#city').empty()
            $('#district').empty()
            $('#sub_district').empty()
            $.each(result, function (i, field) {
                const option = document.createElement("option");
                option.value = field.id;
                option.text = field.name;
                document.getElementById("city").add(option);
            });
        });
    })
    $('#city').change(function () {
        const selectedID = this.options[this.selectedIndex].value;
        $.getJSON(server + "getDistricts/" + selectedID, function (result) {
            $('#district').empty()
            $('#sub_district').empty()
            $.each(result, function (i, field) {
                const option = document.createElement("option");
                option.value = field.id;
                option.text = field.name;
                document.getElementById("district").add(option);
            });
        });
    })
    $('#district').change(function () {
        const selectedID = this.options[this.selectedIndex].value;
        $.getJSON(server + "getSubDistricts/" + selectedID, function (result) {
            $('#sub_district').empty()
            $.each(result, function (i, field) {
                const option = document.createElement("option");
                option.value = field.id;
                option.text = field.name;
                document.getElementById("sub_district").add(option);
            });
        });
    })
</script>

