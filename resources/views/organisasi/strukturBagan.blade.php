@extends('master')

@section('title')
    Struktur Organisasi
@endsection

@section('page_title')
    Struktur Organisasi
@endsection
@section('content')
    @include('header')
    <div class="flex text-sm font-medium text-center text-gray-500 border-b border-gray-200 justify-center m-4">
        <ul class="flex flex-wrap -mb-px">
            <li class="me-2">
                <a href="#bagan-section"
                    class="tab-link inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500"
                    data-target="#bagan-section" aria-current="page">Gambar Bagan</a>
            </li>
            <li class="me-2">
                <a href="#fungsi-section"
                    class="tab-link inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    data-target="#fungsi-section">Tugas dan Fungsi</a>
            </li>
        </ul>
    </div>

    <div id="bagan-section" class="flex justify-center m-6">
    </div>

    <div id="fungsi-section" class="flex flex-col justify-center m-6 hidden">
    </div>
@endsection
@section('addScript')
<script>
    function fetchBagan() {
        $.ajax({
            url: "{!! route('getgaleri') !!}",
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (Array.isArray(response)) {
                    var html = '';
                    response.forEach(function(item) {
                        if (item.kategori === 'bagan') {
                            var imgUrl = "{{ asset('storage/post_img') }}/" + item.gambar;
                            html += '<img class="max-w-full h-auto lg:max-w-screen-lg" src="' + imgUrl +
                                '" alt="image description">';
                        }
                    });
                    $('#bagan-section').html(html);
                } else {
                    console.log("Invalid data format. Expected an array.");
                }
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    }

    function fetchJabatan() {
        $.ajax({
            url: "{!! route('getjabatan') !!}",
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (Array.isArray(response)) {
                    var html = '';
                    response.forEach(function(item) {
                        html += '<div class="mb-4">';
                        html += '<h2 class="text-xl font-bold text-gray-900 dark:text-white">' + item.nama_jabatan + '</h2>';
                        html += '<p class="text-gray-700 dark:text-gray-300">' + item.deskripsi + '</p>';
                        html += '</div>';
                    });
                    $('#fungsi-section').html(html);
                } else {
                    console.log("Invalid data format. Expected an array.");
                }
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    }

    $(document).ready(function() {
        fetchBagan();

        $('.tab-link').on('click', function(e) {
            e.preventDefault();
            var target = $(this).data('target');

            $('#bagan-section, #fungsi-section').addClass('hidden');
            $(target).removeClass('hidden');

            if (target === '#bagan-section') {
                fetchBagan();
            } else if (target === '#fungsi-section') {
                fetchJabatan();
            }

            $('.tab-link').removeClass('text-blue-600 border-blue-600 dark:text-blue-500 dark:border-blue-500 active');
            $(this).addClass('text-blue-600 border-blue-600 dark:text-blue-500 dark:border-blue-500 active');
        });
    });
</script>
@endsection
