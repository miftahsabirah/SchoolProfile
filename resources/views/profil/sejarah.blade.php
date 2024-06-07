@extends('master')

@section('title')
    Sejarah
@endsection

@section('content')
    {{-- carousel --}}
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('img/schoolImage.png') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('img/schoolImage.png') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('img/schoolImage.png') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    {{-- Sejarah Sekolah --}}
    <div class="text-center m-10"id="sejarah">
    </div>


    {{-- Profil Sekolah --}}

    <div class="py-8 px-4 mx-auto space-y-12 max-w-screen-xl lg:space-y-20 sm:py-16 lg:px-6">

        <!-- Row -->
        <div class="gap-8 items-center lg:grid lg:grid-cols-2 xl:gap-16">
            <div class="flex justify-center items-center">
                <img class="hidden mb-4 max-w-lg lg:mb-0 lg:flex rounded-sm"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/features/feature-office-2.png"
                    alt="office feature image 2">
            </div>

            <div class="text-gray-900 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                    Profil Sekolah
                </h2>

                <p class="font-light lg:text-2xl" id="nama_sekolah">
                </p>

                <hr class="h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">

                <p class="font-light lg:text-2xl" id=npsn>
                </p>

                <hr class="h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">

                <p class="font-light lg:text-2xl" id=status>
                </p>

                <hr class="h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">

                <p class="font-light lg:text-2xl" id=bentuk_pendidikan>
                </p>

                <hr class="h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">

                <p class="font-light lg:text-2xl" id=status_kepemilikan>
                </p>

                <hr class="h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">
                <hr class="h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">

                <p class="font-light lg:text-2xl" id=sk_pendirian_sekolah>
                </p>

                <hr class="h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">
                <hr class="h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">

                <p class="font-light lg:text-2xl" id=tgl_sk_pendirian>
                </p>

                <hr class="h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">
                <hr class="h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">

                <p class="font-light lg:text-2xl" id=sk_izin_operasional>
                </p>

                <hr class="h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">
                <hr class="h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">

                <p class="font-light lg:text-2xl" id=tgl_sk_izin_operasional>
                </p>

                <hr class="h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">




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
                        html +=
                            '<h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Sejarah Sekolah</h2>';
                        html +=
                            '<p class="mx-auto mt-5 max-w-6xl text-justify text-2xl text-gray-900 sm:mt-10"></p>';
                        html +=
                            '<p class="mx-auto mt-5 max-w-6xl text-justify text-2xl text-gray-900 sm:mt-10">' +
                            item.deskripsi_sejarah + '</p>';

                        $('#nama_sekolah').text('Nama Sekolah : ' + item.nama_sekolah);
                    });
                    $('#sejarah').html(html);
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
            url: "{!! route('getakreditasi') !!}",
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (Array.isArray(response)) {
                    var html = '';
                    response.forEach(function(item) {
                        $('#npsn').text('Nomor Pokok Sekolah Nasional (NPSN) : ' + item.npsn);
                        $('#status').text('Status : ' + item.status);
                        $('#bentuk_pendidikan').text('Bentuk Pendidikan : ' + item.bentuk_pendidikan);
                        $('#status_kepemilikan').text('Status Kepemilikan : ' + item
                        .status_kepemilikan);
                        $('#sk_pendirian_sekolah').text('SK Pendirian Sekolah : ' + item
                            .sk_pendirian_sekolah);
                        $('#tgl_sk_pendirian').text('Tanggal SK Pendirian : ' + item.tanggal_sk_pendirian);
                        $('#sk_izin_operasional').text('SK Izin Operasional : ' + item
                            .sk_izin_operasional);
                        $('#tgl_sk_izin_operasional').text('Tanggal SK Izin Operasional : ' + item
                            .tanggal_sk_izin_operasional);
                    });
                } else {
                    console.log("Invalid data format. Expected an array.");
                }
            },
            error: function(xhr, status, error) {
                // Handle errors, if any
                console.log(error);
            }
        });
    </script>
@endsection
