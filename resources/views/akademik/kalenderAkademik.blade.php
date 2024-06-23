@extends('master')

@section('title')
    Kalender Akademik
    Kalender Akademik
@endsection

@section('page_title')
    Kalender Akademik
@endsection

@section('content')
    @include('header')

    <div class="py-8 px-4 mx-auto space-y-12 max-w-screen-xl lg:space-y-20 sm:py-16 lg:px-6" id="akademik">
    @include('header')

    <div class="py-8 px-4 mx-auto space-y-12 max-w-screen-xl lg:space-y-20 sm:py-16 lg:px-6" id="akademik">
    @include('header')

    <div class="py-8 px-4 mx-auto space-y-12 max-w-screen-xl lg:space-y-20 sm:py-16 lg:px-6" id="akademik">
    </div>
@endsection
@section('addScript')
    <script>
        $.ajax({
            url: "http://127.0.0.1:8000/api/getakademik",
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (Array.isArray(response)) {
                    var html = '';
                    response.forEach(function(item) {
                        html += '<div class="gap-8 items-center lg:grid lg:grid-cols-2 xl:gap-16">';
                        // html += '<img class="hidden mb-4 w-full lg:mb-0 lg:flex rounded-lg"';
                        // html += 'src="' + item.image_url + '"';
                        // html += 'alt="office feature image">';
                        html += '<div class="text-gray-500 sm:text-lg dark:text-gray-400">';
                        html +=
                            '<h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">';
                        html += '<span style="display: inline-block;">Tahun Akademik</span>';
                        html += '<span style="display: inline-block;">' + item.tahun_ajaran + '</span>';
                        html += '</h2>';
                        html += '<p class="mb-8 font-light lg:text-xl">' + item.deskripsi + '</p>';
                        var downloadUrl = "{{ Storage::url('akademik/') }}" + item . file_berkas;
                        html += '<a href="' + downloadUrl +
                            '" target="_blank" class="text-white bg-gradient-to-r from-orange-600 via-orange-500 to-orange-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">';
                        html += 'Unduh File';
                        html +=
                            '<svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 18">';
                        html +=
                            '<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 1v11m0 0 4-4m-4 4L4 8m11 4v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3" />';
                        html += '</svg>';
                        html += '</a>';
                        html += '</div>';
                        html += '</div>';
                    });
                    $('#akademik').html(html);
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
@section('addScript')
    <script>
        $.ajax({
            url: "{!! route('getakademik') !!}",
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (Array.isArray(response)) {
                    var html = '';
                    response.forEach(function(item) {
                        html += '<div class="gap-8 items-center lg:grid lg:grid-cols-2 xl:gap-16">';
                        // html += '<img class="hidden mb-4 w-full lg:mb-0 lg:flex rounded-lg"';
                        // html += 'src="' + item.image_url + '"';
                        // html += 'alt="office feature image">';
                        html += '<div class="text-gray-500 sm:text-lg dark:text-gray-400">';
                        html +=
                            '<h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">';
                        html += '<span style="display: inline-block;">Tahun Akademik</span>';
                        html += '<span style="display: inline-block;">' + item.tahun_ajaran + '</span>';
                        html += '</h2>';
                        html += '<p class="mb-8 font-light lg:text-xl">' + item.deskripsi + '</p>';
                        var downloadUrl = "{{ Storage::url('akademik/') }}" + item . file_berkas;
                        html += '<a href="' + downloadUrl +
                            '" target="_blank" class="text-white bg-gradient-to-r from-orange-600 via-orange-500 to-orange-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">';
                        html += 'Unduh File';
                        html +=
                            '<svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 18">';
                        html +=
                            '<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 1v11m0 0 4-4m-4 4L4 8m11 4v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3" />';
                        html += '</svg>';
                        html += '</a>';
                        html += '</div>';
                        html += '</div>';
                    });
                    $('#akademik').html(html);
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
@section('addScript')
    <script>
        $.ajax({
            url: "{!! route('getakademik') !!}",
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (Array.isArray(response)) {
                    var html = '';
                    response.forEach(function(item) {
                        html += '<div class="gap-8 items-center lg:grid lg:grid-cols-2 xl:gap-16">';
                        // html += '<img class="hidden mb-4 w-full lg:mb-0 lg:flex rounded-lg"';
                        // html += 'src="' + item.image_url + '"';
                        // html += 'alt="office feature image">';
                        html += '<div class="text-gray-500 sm:text-lg dark:text-gray-400">';
                        html +=
                            '<h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">';
                        html += '<span style="display: inline-block;">Tahun Akademik</span>';
                        html += '<span style="display: inline-block;">' + item.tahun_ajaran + '</span>';
                        html += '</h2>';
                        html += '<p class="mb-8 font-light lg:text-xl">' + item.deskripsi + '</p>';
                        var downloadUrl = "{{ Storage::url('akademik/') }}" + item . file_berkas;
                        html += '<a href="' + downloadUrl +
                            '" target="_blank" class="text-white bg-gradient-to-r from-orange-600 via-orange-500 to-orange-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">';
                        html += 'Unduh File';
                        html +=
                            '<svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 18">';
                        html +=
                            '<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 1v11m0 0 4-4m-4 4L4 8m11 4v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3" />';
                        html += '</svg>';
                        html += '</a>';
                        html += '</div>';
                        html += '</div>';
                    });
                    $('#akademik').html(html);
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


