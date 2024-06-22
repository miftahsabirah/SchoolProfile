@extends('master')

@section('title')
    Kurikulum
    Kurikulum
@endsection
@section('page_title')
    Kurikulum
@endsection
@section('page_title')
    Kurikulum
@endsection
@section('content')
    @include('header')
    <div class="text-center m-10" id="nama_sekolah">
    </div>


    <div class="mx-auto mt-5 max-w-6xl text-justify text-2xl text-gray-900 sm:mt-10" id="kurikulum">
    </div>
@endsection
@section('addScript')
    <script>
        $.ajax({
            url: "{!! route('getkurikulum') !!}",
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (Array.isArray(response)) {
                    var html = '';
                    response.forEach(function(item) {
                        html +=
                            '<div class="mx-auto mt-5 max-w-6xl text-justify text-2xl text-gray-900 sm:mt-10">';
                        html += '<p>' + item.deskripsi + '</p>';
                        html += '</div>';
                        html += '<div class="text-center mt-5">';
                        html +=
                            '<h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">';
                        html += '<span style="display: inline-block;"> Panduan pembelajaran </span>';
                        html += '<span style="display: inline-block;">' + item.jenis_kurikulum +
                            '</span>';
                        html += '</h2>';
                        var downloadUrl = "{{ Storage::url('kurikulum/') }}" + item.file_kurikulum;
                        html += '<a href="' + downloadUrl +
                            '" target="_blank" class="text-white bg-gradient-to-r from-orange-600 via-orange-500 to-orange-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5">';
                        html += 'Unduh File';
                        html +=
                            '<svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 18">';
                        html +=
                            '<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 1v11m0 0 4-4m-4 4L4 8m11 4v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3" />';
                        html += '</svg>';
                        html += '</a>';
                        html += '</div>';
                    });
                    $('#kurikulum').html(html);
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
            url: "{!! route('profile') !!}",
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (Array.isArray(response)) {
                    var html = '';
                    response.forEach(function(item) {
                        html +=
                            '<h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">';
                        html += '<span style="display: inline-block;" >Kurikulum </span>';
                        html += '<span style="display: inline-block;">' + item.nama_sekolah + '</span>';
                        html += '</h2>';
                    });
                    $('#nama_sekolah').html(html);
                } else {
                    console.log("Invalid data format. Expected an array.");
                }
            },
            error: function(xhr, status, error) {
                console.log("AJAX request error:", error);
            }
        });
    </script>
@endsection
