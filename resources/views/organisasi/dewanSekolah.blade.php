@extends('master')

@section('title')
    Home
@endsection

@section('page_title')
    Dewan Penguru Sekolah
@endsection
@section('content')
    @include('header')

    <div class="lg:py-16 py-8">
        <div class="px-4 mx-auto mb-2 max-w-screen-md text-center md:mb-3 lg:px-0">
            <p class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 md:text-4xl">
                Dewan Pengurus Sekolah
            </p>
        </div>
        <div class="mx-auto max-w-screen-xl">
            <div id="dewan_pengurus" class="px-16 sm:px-24 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Dynamic content will be inserted here --}}
            </div>
        </div>
    </div>
    {{-- <div class="lg:py-16 py-8">
        <div class="px-4 mx-auto mb-2 max-w-screen-md text-center md:mb-3 lg:px-0">
            <p class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 md:text-4xl">
                Dewan Pengurus Sekolah
            </p>
        </div>
        <div class="mx-auto max-w-screen-xl">
            <div id="animation-carousel" class="relative px-16 sm:px-24" >
                    <div class="overflow-hidden relative h-[70vh] rounded-lg" id="dewan_pengurus">
                        <div class="grid hidden absolute inset-0 gap-8 transition-all duration-900 ease-linear transform lg:grid-cols-3"
                            data-carousel-item="">
                            <div
                                class="w-full h-full rounded-lg overflow-hidden transition-transform duration-300 transform hover:scale-105">
                                <div class="rounded-lg shadow-lg">
                                    <div class="flex-shrink-0">
                                        <img class="h-96 w-full object-cover" src="img/guru.png" alt="">
                                    </div>
                                    <div class="flex flex-1 flex-col justify-between bg-white p-6">
                                        <p class="font-bold text-2xl text-center text-gray-900">Mary Crispy</p>
                                        <p class="font-regular text-xl text-center text-blue-800">Ketua Dewan Sekolah</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <button type="button"
                    class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    >
                    <span
                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10  bg-orange-500  group-hover:bg-orange-600 group-focus:ring-2 group-focus:ring-orange-600/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                        <span class="hidden">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-next="">
                    <span
                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10  bg-orange-500  group-hover:bg-orange-600 group-focus:ring-2 group-focus:ring-orange-600/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                        <span class="hidden">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </div> --}}
@endsection
@section('addScript')
    <script>
        function fetchData(filter = 'Kepala Sekolah') {
            $.ajax({
                url: "http://127.0.0.1:8000/api/getguru",
                type: "GET",
                dataType: "json",
                success: function(response) {
                    if (Array.isArray(response)) {
                        var html = '';
                        response.forEach(function(item) {
                            if (item.jabatan.nama_jabatan.toLowerCase() === filter.toLowerCase()) {
                                var imgUrl = "http://localhost:8000/storage/post_guru_karyawan/" + item
                                    .foto;
                                html += '<div class="w-full h-full rounded-lg overflow-hidden transition-transform duration-300 transform hover:scale-105">';
                                html += '<div class = "rounded-lg shadow-lg" > ';
                                html += '<div class="flex-shrink-0">';
                                html += '<img class = "h-96 w-full object-cover" src="' + imgUrl + '"  alt = "" >';
                                html += '</div>';
                                html += '<div class = "flex flex-1 flex-col justify-between bg-white p-6" >';
                                html += '<p class="font-bold text-2xl text-center text-gray-900">'+item.nama_guru+'</p>';
                                html += '<p class = "font-regular text-xl text-center text-blue-800" > '+item.jabatan.nama_jabatan + '</p>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            }
                        });
                        $('#dewan_pengurus').html(html);
                    } else {
                        console.log("Invalid data format. Expected an array.");
                    }
                },
                error: function(xhr, status, error) {
                    console.log("AJAX Error: " + error);
                }
            });
        }
        $(document).ready(function() {
            fetchData();
        });
    </script>
@endsection
