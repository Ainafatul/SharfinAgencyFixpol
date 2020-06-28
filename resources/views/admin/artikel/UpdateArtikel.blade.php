<article class="container page-container">
    <div style="padding-bottom: 100px;padding-top: 50px">
        <div class="card m-lg-auto">
            <h2 class="m-3">Berita</h2>
            <div class="card-body" style="margin-bottom: 36px">
                <form class="m-lg-auto" action="/onUpdateBerita/{{ $beritas->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $beritas->title}}">
                    </div>
                    <div class="form-group">
                        <label for="author">Penulis</label>
                    <input type="text" class="form-control" id="author" name="author" value="{{ $beritas->author}}">
                    </div>
                    <div class="form-group">
                        <label for="content">Konten</label>
                    <textarea class="form-control" id="content" name="content" >{{$beritas->content}}</textarea>
                    </div>
                    <label for="customFile">Gambar</label>
                    <div class="custom-file">
                    <input id="customFile" name="image" class="custom-file-input" type="file" value="{{$beritas->image}}">
                        <label class="custom-file-label" for="customFile">Choose file</label></div>
                    <button style="margin-top: 24px" class="btn btn-primary w-100" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</article>
<style>
    img {
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
</style>
