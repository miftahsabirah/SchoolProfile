@extends('master')

@section('title')
    Detail Berita
@endsection

@section('content')
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6" id="detail_berita">
    </div>
@endsection

@section('addScript')
    <script>
        $(document).ready(function() {
            // Extract the ID from the URL
            var currentUrl = window.location.href;
            var id = currentUrl.substring(currentUrl.lastIndexOf('/') + 1);

            console.log(currentUrl);
            console.log(id);

            // Check if the ID is present
            if (!id) {
                console.log("ID tidak ditemukan di URL");
                return;
            }

            $.ajax({
                url: "http://127.0.0.1:8000/api/getdetailinformasi/" + id,
                type: "GET",
                dataType: "json",
                success: function(response) {
                    if (response) {
                        var html = '';
                        var imgUrl = "http://localhost:8000/storage/informasi/" + response.gambar;
                        html += '<div class="flex justify-center items-center h-full">';
                        html += '<img class="object-cover rounded-lg h-96 w-full max-w-full" src="' + imgUrl + '" alt="Gambar Berita">';
                        html += '</div>';
                        html += '<div class="mt-8  text-center">';
                        html += '<p class="text-2xl font-bold text-gray-900 mb-5">' + response.judul + '</p>';
                        html += '<p class="text-regular text-justify text-gray-500">' + response.isi + '</p>';
                        html += '</div>';
                        $('#detail_berita').html(html);
                    } else {
                        console.log("No data found for the given ID.");
                    }
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        });
    </script>
@endsection
