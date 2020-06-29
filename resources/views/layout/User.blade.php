<!doctype html>
<html lang="en">
@include('layout.Head')
<body>
<div class="page-wrapper chiller-theme toggled" style="background: #E5F5F3">
    @include('user.Sidebar')

    <main class="page-content" style="overflow-y: auto;max-height: 100vh;padding-bottom: 128px">
        <div class="container-fluid">
            @yield('content')
        </div>
    </main>

    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
        <i class="fas fa-bars"></i>
    </a>
</div>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                $('#img-preview').empty()
                $('#img-preview').append('<div class="col-md-3" style="height: 200px;margin-bottom: 16px">' +
                    '<img id="img-preview" class="img-thumbnail h-100" src="' + e.target.result + '" style="object-fit: cover"/>' +
                    '</div>');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#fileuploads").change(function () {
        readURL(this);
    });
    @stack('scripts')
</script>
</body>
</html>
