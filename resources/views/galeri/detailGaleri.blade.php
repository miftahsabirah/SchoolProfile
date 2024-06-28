@extends('master')

@section('title')
    Detail Galeri
@endsection

@section('content')
    <div class="lg:py-16 py-8 px-16">
        <div class="px-4 mx-auto mb-6 max-w-screen-md text-center md:mb-12 lg:px-0">
            <p class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 md:text-4xl" id="judul_galeri">
            </p>
        </div>

        <div class="flex flex-wrap gap-4 justify-center">
            <div class="px-16">
                <img class="h-auto max-w-full rounded-lg" src="" alt="" id="gambar_galeri">
            </div>
        </div>
    </div>
@endsection
@section('addScript')
    <script>
        $(document).ready(function() {
            var currentUrl = window.location.href;
            var id = currentUrl.substring(currentUrl.lastIndexOf('/') + 1);

            console.log(currentUrl);
            console.log(id);

            if (!id) {
                console.log("ID tidak ditemukan di URL");
                return;
            }

            $.ajax({
                url: "http://127.0.0.1:8000/api/getdetailgaleri/" + id,
                type: "GET",
                dataType: "json",
                success: function(response) {
                    if (response) {
                        var imgUrl = "http://localhost:8000/storage/post_img/" + response.gambar;
                        $('#judul_galeri').text( response.judul);
                        $('#gambar_galeri').attr('src', imgUrl);
                    } else {
                        console.log("Data tidak ditemukan untuk ID yang diberikan.");
                    }
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        });
    </script>
@endsection
