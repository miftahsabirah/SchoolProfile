@extends('master')

@section('title')
    Galeri
@endsection

@section('page_title')
    Galeri
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
                <a href="#" data-filter="Kegiatan"
                    class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 filter-link">Kegiatan</a>
            </li>
            <li class="me-2">
                <a href="#" data-filter="Pojok Sekolah"
                    class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 filter-link">Pojok
                    Sekolah</a>
            </li>
            <li class="me-2">
                <a href="#" data-filter="Prestasi"
                    class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 filter-link">Prestasi</a>
            </li>
        </ul>
    </div>

    <div class="lg:py-16 py-8 px-16">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4" id="galeri-container">
            <!-- Konten galeri akan di-generate oleh JavaScript -->
        </div>
    </div>
@endsection

@section('addScript')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function fetchData(filter = '') {
            $.ajax({
                url: "{!! route('getgaleri') !!}",
                type: "GET",
                dataType: "json",
                success: function(response) {
                    var galeriContainer = $('#galeri-container');
                    galeriContainer.empty(); // Kosongkan container sebelum menambahkan item baru

                    if (Array.isArray(response)) {
                        response.forEach(function(item) {
                            if (!filter || item.kategori.toLowerCase() === filter.toLowerCase()) {
                                var imgUrl = "{{ asset('storage/post_img') }}/" + item.gambar;
                                var galeriitem = $('<div class="relative group">' +
                                    '<img class="w-full h-full rounded-lg object-cover" src="' +
                                    imgUrl + '" alt="' + item.judul + '">' +
                                    '<div class="absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center bg-blue-950 bg-opacity-70 opacity-0 group-hover:opacity-100 transition duration-300 z-10 rounded-lg">' +
                                    '<svg class="w-8 h-8 rounded-full bg-orange-500 text-white p-1 fill-current transition duration-300 mb-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">' +
                                    '<path d="M9.707 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.086 11H2a1 1 0 010-2h12.086l-3.793-3.793a1 1 0 010-1.414z" />' +
                                    '</svg>' +
                                    '<p class="text-white text-2xl underline font-bold">' + item.judul + '</p>' +
                                    '</div>' +
                                    '<a href="#" class="absolute inset-0 z-20"></a>' +
                                    '</div>');
                                galeriContainer.append(galeriitem);
                            }
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
            // Initial data fetch
            fetchData();

            // Set up click event handlers for the filter links
            $('.filter-link').click(function(e) {
                e.preventDefault();
                var filter = $(this).data('filter');
                fetchData(filter);

                // Update active state
                $('.filter-link').removeClass('text-blue-600 border-blue-600 dark:text-blue-500 dark:border-blue-500');
                $(this).addClass('text-blue-600 border-blue-600 dark:text-blue-500 dark:border-blue-500');
            });
        });
    </script>
@endsection
