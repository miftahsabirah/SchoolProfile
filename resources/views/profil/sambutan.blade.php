@extends('master')

@section('title')
    Detail Akreditasi
@endsection
@section('page_title')
    Sambutan
@endsection
@section('content')
@include('header')
    <div class="py-16 px-4 mx-auto max-w-screen-xl">
        <div class="flex flex-col lg:flex-row items-center lg:items-start justify-center lg:justify-start mb-4 lg:mb-0">
            <div class="relative " id="namakepalasekolah">
            </div>

            <div class="ml-0 lg:ml-20 mt-40 lg:mt-0">
                <p class="text-gray-500 mb-5 text-lg">
                    Assalamu’alaikum Wr.Wb
                </p>

                <p class="text-gray-500 mb-5 text-lg container mx-auto" id="sambutan">
                </p>

                <p class="text-gray-500 mb-5 text-lg">
                    Wassalamu’alaikum Wr. Wb.
                </p>
            </div>
        </div>
    </div>
@endsection
@section('addScript')
    <script>  
        $.ajax({
            url: "{!! route('profile') !!}",
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (Array.isArray(response)) {
                    var html = '';
                    response.forEach(function(item) {
                        html += '<p class="text-gray-500 mb-5 text-lg">' + item.sambuatan_kepsek +
                            '</p>';
                    });
                    $('#sambutan').html(html);
                } else {
                    console.log("Invalid data format. Expected an array.");
                }
            },
            error: function(xhr, status, error) {
                // Handle errors, if any
                console.log(error);
            }
        });

        $.ajax({
            url: "{!! route('getguru') !!}",
            type: "GET",
            dataType: "json",
            success: function(response) {
                    var html = '';
                    var kepalasekolah = null;
                    response.forEach(function(item) {
                        if (item.jabatan.nama_jabatan === 'Kepala sekolah') {
                            kepalasekolah = item;
                        }
                    });
                    if (kepalasekolah) {
                    var imgUrl = "{{ asset('storage/post_guru_karyawan') }}/" + kepalasekolah.foto;
                    html += '<img class="h-auto max-w-40 lg:w-auto" src="' + imgUrl + '" alt="' + kepalasekolah.nama_guru + '">';
                    html += '<div class="absolute bottom--2 left-0 right-0 text-center text-white px-4 py-2 bg-blue-950">';
                    html += '<p class="font-bold text-2xl">' + kepalasekolah.nama_guru + '</p>';
                    html += '<p class="text-xl font-normal">' + kepalasekolah.jabatan.nama_jabatan + '</p>';
                    html += '</div>';
                    $('#namakepalasekolah').html(html);
                    } else {
                        console.log("Data Kepala Sekolah tidak ditemukan.");
                    }
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    </script>
@endsection
