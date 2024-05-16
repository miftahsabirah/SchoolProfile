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
            <img src="img/schoolImage.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="img/schoolImage.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="img/schoolImage.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

{{-- Sejarah Sekolah --}}
<div class="text-center m-10">
    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Sejarah Sekolah</h2>
    <p class="mx-auto mt-5 max-w-6xl text-justify text-2xl text-gray-900 sm:mt-10">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
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

            <p class="font-light lg:text-2xl">
                Nama Sekolah : SD N CIREN
            </p>

            <hr class="h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">

            <p class="font-light lg:text-2xl">
                Nomor Statistik Sekolah (NSS) : 101040106017
            </p>

            <hr class="h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">

            <p class="font-light lg:text-2xl">
                Nomor Pokok Sekolah Nasional  (NPSN) : 20400701
            </p>

            <hr class="h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">

            <p class="font-light lg:text-2xl">
                Status : Negeri
            </p>

            <hr class="h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">

            <p class="font-light lg:text-2xl">
                Status Dalam Gugus : Sekolah Imbas
            </p>

            <hr class="h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">


            
            
        </div>
    </div>
</div>


@endsection