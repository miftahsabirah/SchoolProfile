@extends('master')

@section('title')
    Berita
@endsection

@section('page_title')
    Berita
@endsection

@section('content')
    @include('header')
    <div class="flex text-sm font-medium text-center text-gray-500 border-b border-gray-200 justify-center m-4">
        <ul class="flex flex-wrap -mb-px">
            <li class="me-2">
                <a href="#" data-filter=""
                    class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 filter-link">Semua</a>
            </li>
            <li class="me-2">
                <a href="#" data-filter="Artikel"
                    class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 filter-link">Artikel</a>
            </li>
            <li class="me-2">
                <a href="#" data-filter="Pengumuman"
                    class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 filter-link">Pengumuman</a>
            </li>
            <li class="me-2">
                <a href="#" data-filter="Prestasi"
                    class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 filter-link">Prestasi</a>
            </li>
        </ul>
    </div>

    <div class="mx-auto max-w-screen-xl my-px mt-3">
        <div id="animation-carousel" class="relative px-16 sm:px-24" data-carousel="slide">
            <div class="overflow-hidden relative h-[75vh] rounded-lg">
                <div class="grid hidden absolute inset-0 gap-8 transition-all duration-700 ease-linear transform lg:grid-cols-3"
                    data-carousel-item="">
                    <div class="block w-full h-full rounded-lg">
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg" id="informasi_">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('addScript')
    <script>
        function fetchData(filter = '') {
            $.ajax({
                url: "http://127.0.0.1:8000/api/profile",
                type: "GET",
                dataType: "json",
                success: function(response) {
                    if (Array.isArray(response)) {
                        var html = '';
                        response.forEach(function(item) {
                            if (!filter || item.kategori.toLowerCase() === filter
                                .toLowerCase()) {
                                var imgUrl = "{{ asset('storage/informasi') }}/" + item.gambar;
                                var createdDate = new Date(item.created_at);
                                var formattedDate = createdDate.toLocaleDateString('en-US', {
                                    year: 'numeric',
                                    month: 'long',
                                    day: 'numeric'
                                });

                                html += '<div class="flex-shrink-0">';
                                html += '<img class="h-48 w-full object-cover" src="' + imgUrl +
                                    '" alt="">';
                                html += '</div>';
                                html +=
                                    '<div class="flex flex-1 flex-col justify-between bg-white p-6">';
                                html += '<div class="flex-1">';
                                html += '<p class="text-sm font-medium text-indigo-600">';
                                html += '<a class="hover:underline">' + item.kategori + '</a>';
                                html += '</p>';
                                html += '<a class="mt-2 block">';
                                html += '<p class="text-xl font-semibold text-gray-900">' + item.judul +
                                    '</p>';
                                html += '<p class="mt-3 text-base text-gray-500">' + item.isi + '</p>';
                                html += '</a>';
                                html += '</div>';
                                html += '<div class="mt-6 flex items-center">';
                                html += '<div class="ml-3">';
                                html +=
                                    '<p class="text-sm font-medium text-gray-900"><a href="#" class="hover:underline">' +
                                    item.gurukaryawan.nama_guru + '</a></p>';
                                html += '<div class="flex space-x-1 text-sm text-gray-500">';
                                html += '<time datetime="' + item.created_at + '">' + formattedDate +
                                    '</time>';
                                html += '<span aria-hidden="true">·</span>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            }
                        });
                        $('#informasi_').html(html);
                    } else {
                        console.log("Invalid data format. Expected an array.");
                    }
                },
                error: function(xhr, status, error) {
                    console.log("AJAX request error:", error);
                }
            });
        }
        $(document).ready(function() {
            // Initial data fetch
            fetchData();

            // Set up click event handlers for the filter links
            $('.filter-link').click(function(e) {

                e.preventDefault();
                var filter = $(this).data('filter');
                fetchData(filter);

                // Update active state
                $('.filter-link').removeClass(
                    'text-blue-600 border-blue-600 dark:text-blue-500 dark:border-blue-500');

                $(this).addClass('text-blue-600 border-blue-600 dark:text-blue-500 dark:border-blue-500');
            });
        });
    </script>
@endsection
