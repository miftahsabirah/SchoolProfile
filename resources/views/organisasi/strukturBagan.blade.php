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

    <div id="fungsi-section" class="px-4 mx-auto max-w-screen-xl lg:px-12 sm:text-center mb-10"></div>

@endsection
@section('addScript')
    <script>
        function fetchBagan() {
            $.ajax({
                url: "http://127.0.0.1:8000/api/getgaleri",
                type: "GET",
                dataType: "json",
                success: function(response) {
                    if (Array.isArray(response)) {
                        var html = '';
                        response.forEach(function(item) {
                            if (item.kategori === 'bagan') {
                                var imgUrl = "http://localhost:8000/storage/post_img/" + item.gambar;
                                html += '<img class="max-w-full h-auto lg:max-w-screen-lg" src="' +
                                    imgUrl +
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
                url: "http://127.0.0.1:8000/api/getjabatan",
                type: "GET",
                dataType: "json",
                success: function(response) {
                    if (Array.isArray(response)) {
                        var html = '';
                        response.forEach(function(item, index) {
                            var headingId = 'accordion-open-heading-' + index;
                            var bodyId = 'accordion-open-body-' + index;
                            html += '<h2 id="' + headingId + '">';
                            html +=
                                '<button type="button" class=" mt-3 flex items-center justify-between w-full p-7 font-medium rtl:text-right text-gray-500 rounded-xl bg-white border-l-8 border-orange-500 shadow-lg hover:bg-gray-50" data-accordion-target="#' +
                                bodyId + '" aria-expanded="false" aria-controls="' + bodyId + '">';
                            html += '<span class="flex items-center">' + item.nama_jabatan + '</span>';
                            html +=
                                '<svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">';
                            html +=
                                '<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>';
                            html += '</svg>';
                            html += '</button>';
                            html += '</h2>';
                            html += '<div id="' + bodyId + '" class="hidden" aria-labelledby="' +
                                headingId + '">';
                            html +=
                                '<div class="p-5 mt-1 rounded-xl border-l-8 border-orange-500 shadow-lg">';
                            html += '<p class="mb-2 text-gray-500 dark:text-gray-400 text-start">' +
                                item.deskripsi + '</p>';
                            html += '</div>';
                            html += '</div>';
                        });
                        $('#fungsi-section').html(html);

                        $('[data-accordion-target]').on('click', function() {
                            var target = $(this).data('accordion-target');
                            $(target).toggleClass('hidden');
                            var expanded = $(this).attr('aria-expanded') === 'true' || false;
                            $(this).attr('aria-expanded', !expanded);
                        });
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

                $('.tab-link').removeClass(
                    'text-blue-600 border-blue-600 dark:text-blue-500 dark:border-blue-500 active');
                $(this).addClass(
                    'text-blue-600 border-blue-600 dark:text-blue-500 dark:border-blue-500 active');
            });
        });
    </script>
@endsection
