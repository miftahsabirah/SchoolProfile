@extends('master')

@section('title')
    Sarana Prasarana
@endsection

@section('page_title')
    Sarana Prasarana
@endsection
@section('content')
    @include('header')
    <div class="lg:py-16 py-8 px-16">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4" id="sarpras-container">
            <!-- Tempat untuk menampilkan data sarpras -->
        </div>
    </div>
@endsection
@section('addScript')
    <script>
        $.ajax({
            url: "http://127.0.0.1:8000/api/getsarpras",
            type: "GET",
            dataType: "json",
            success: function(response) {
                var sarprasContainer = $('#sarpras-container');
                if (Array.isArray(response)) {
                    response.forEach(function(item) {
                        var imgUrl = "http://localhost:8000/storage/post_img/" + item.gambar;
                        var sarprasItem = $('<div class="relative group">' +
                            '<img class="w-full h-full rounded-lg object-cover" src="' + imgUrl +
                            '" alt="' + item.nama_sarpras + '">' +
                            '<div class="absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center bg-blue-950 bg-opacity-70 opacity-0 group-hover:opacity-100 transition duration-300 z-10 rounded-lg">' +
                            '<svg class="w-8 h-8 rounded-full bg-orange-500 text-white p-1 fill-current transition duration-300 mb-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">' +
                            '<path d="M9.707 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.086 11H2a1 1 0 010-2h12.086l-3.793-3.793a1 1 0 010-1.414z" />' +
                            '</svg>' +
                            '<p class="text-white text-2xl underline font-bold">' + item
                            .nama_sarpras + '</p>' +
                            '</div>' +
                            '<a href="#" class="absolute inset-0 z-20"></a>' +
                            '</div>');
                        sarprasContainer.append(sarprasItem);
                    });
                } else {
                    console.log("Invalid data format. Expected an array.");
                }
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    </script>
@endsection
