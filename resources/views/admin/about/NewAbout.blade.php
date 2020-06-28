<div class="card m-lg-auto" style="padding: 24px 64px;border-top: 0">
    <h2 class="m-3">ABOUT</h2>
    <div class="card-body" style="margin-bottom: 36px">
            <div class="card-body" style="margin-bottom: 36px">
                <form class="m-lg-auto" action="{{route('onNewAbout')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="content">Tentang</label>
                        <textarea  class="form-control" id="content" name="content"></textarea>
                    </div>
                    <label for="customFile">Gambar</label>
                    <div class="custom-file">
                        <input id="customFile" name="image" class="custom-file-input" type="file">
                        <label class="custom-file-label" for="customFile">Choose file</label></div>
                    <button style="margin-top: 24px" class="btn btn-primary w-100" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>

<style>
    img {
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
</style>
