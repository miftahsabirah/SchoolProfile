@extends('master')

@section('title')
Home
@endsection

@section('content')



<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative lg:h-[92vh] overflow-hidden sm:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="img/homeImage-1.png" class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="img/homeImage-1.png" class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="img/homeImage-1.png" class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-2 h-2 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-2 h-2 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-2 h-2 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
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

{{-- video di profil --}}
<div class="flex items-center justify-center mt-24 mb-24">
    <!-- Video -->
    <div class="w-2/5 flex items-center justify-end">
        <video class="w-96 rounded-md" controls>
            <source src="/docs/videos/flowbite.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <!-- Teks -->
    <div class="w-3/5 ml-20">
        <div class="w-20 h-2 bg-orange-600 mb-6"></div>
        <p class="text-3xl font-bold text-gray-900 mb-6">SDN Ciren 1</p>
        <p class="text-base text-gray-500 max-w-xl mb-6">
            Flowbite helps you connect with friends, family and communities of people who share your interests. 
            Connecting with your friends and family as well as discovering new ones is easy with features like Groups.
        </p>
        <button type="button" class="text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-orange-300 font-regular rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
            Lihat Selengkapnya
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </button>
    </div>
</div>

{{-- image slider untuk prestasi mahasiswa --}}

<div class="relative bg-whiite px-6 pt-16 pb-20 lg:px-8 lg:pt-24 lg:pb-28">
    <div class="absolute inset-0">
    <div class="h-1/3 bg-white sm:h-2/3"></div>
    </div>
    <div class="relative mx-auto max-w-7xl">
    <div class="text-center">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Prestasi Siswa</h2>
        <p class="mx-auto mt-3 max-w-2xl text-xl text-gray-500 sm:mt-4">
            Informasi prestasi siswa dapat dilihat dibawah ini
        </p>
    </div>

    {{-- bagian slidernya --}}
    <div class="flex">
        <div class="w-1/12 flex items-center">
            <div class="w-full text-right">
                <button class="p-3 rounded-full bg-orange-600 border mr-8">
                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                </button>
            </div>
        </div>

            <div id="sliderContainer" class=" w-full mx-auto mt-12 grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-3">

                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                <div class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80" alt="">
                </div>
                <div class="flex flex-1 flex-col justify-between bg-white p-6">
                    <div class="flex-1">
                    <p class="text-sm font-medium text-indigo-600">
                        <a href="#" class="hover:underline">Article</a>
                    </p>
                    <a href="#" class="mt-2 block">
                        <p class="text-xl font-semibold text-gray-900">Boost your conversion rate</p>
                        <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.</p>
                    </a>
                    </div>
                    <div class="mt-6 flex items-center">
                    <div class="flex-shrink-0">
                        <a href="#">
                        <span class="sr-only">Roel Aufderehar</span>
                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                        </a>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">
                        <a href="#" class="hover:underline">Roel Aufderehar</a>
                        </p>
                        <div class="flex space-x-1 text-sm text-gray-500">
                        <time datetime="2020-03-16">Mar 16, 2020</time>
                        <span aria-hidden="true">·</span>
                        <span>6 min read</span>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                <div class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80" alt="">
                </div>
                <div class="flex flex-1 flex-col justify-between bg-white p-6">
                    <div class="flex-1">
                    <p class="text-sm font-medium text-indigo-600">
                        <a href="#" class="hover:underline">Video</a>
                    </p>
                    <a href="#" class="mt-2 block">
                        <p class="text-xl font-semibold text-gray-900">How to use search engine optimization to drive sales</p>
                        <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit
                        facilis asperiores porro quaerat doloribus, eveniet dolore. Adipisci tempora aut inventore optio animi.,
                        tempore temporibus quo laudantium.</p>
                    </a>
                    </div>
                    <div class="mt-6 flex items-center">
                    <div class="flex-shrink-0">
                        <a href="#">
                        <span class="sr-only">Brenna Goyette</span>
                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                        </a>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">
                        <a href="#" class="hover:underline">Brenna Goyette</a>
                        </p>
                        <div class="flex space-x-1 text-sm text-gray-500">
                        <time datetime="2020-03-10">Mar 10, 2020</time>
                        <span aria-hidden="true">·</span>
                        <span>4 min read</span>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                <div class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1492724441997-5dc865305da7?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80" alt="">
                </div>
                <div class="flex flex-1 flex-col justify-between bg-white p-6">
                    <div class="flex-1">
                    <p class="text-sm font-medium text-indigo-600">
                        <a href="#" class="hover:underline">Case Study</a>
                    </p>
                    <a href="#" class="mt-2 block">
                        <p class="text-xl font-semibold text-gray-900">Improve your customer experience</p>
                        <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
                        harum rerum voluptatem quo recusandae magni placeat saepe molestiae, sed excepturi cumque corporis
                        perferendis hic.</p>
                    </a>
                    </div>
                    <div class="mt-6 flex items-center">
                    <div class="flex-shrink-0">
                        <a href="#">
                        <span class="sr-only">Daniela Metz</span>
                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                        </a>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">
                        <a href="#" class="hover:underline">Daniela Metz</a>
                        </p>
                        <div class="flex space-x-1 text-sm text-gray-500">
                        <time datetime="2020-02-12">Feb 12, 2020</time>
                        <span aria-hidden="true">·</span>
                        <span>11 min read</span>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

            </div>

        <div class="w-1/12 flex items-center">
            <div class="w-full">
                <button class="p-3 rounded-full bg-orange-600 border ml-8">
                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                </button>
            </div>
        </div>

    </div>

    </div>
</div>

{{-- konten tentang sekolah --}}

<div class="items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid xl:grid-cols-3 lg:gap-8 xl:gap-24 sm:py-16 lg:px-6">
    <div class="mb-8 lg:mb-0">
        <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900">Tentang Sekolah</p>
        <p class="mb-6 text-gray-500 sm:text-base">
            SD Negeri Ciren memiliki komitmen untuk membentuk siswa yang berprestasi, terampil, bertaqwa, dan berkarakter indonesia. 
            sehingga akan menghasilkan lulusan yang baik dan siap melanjutkan ke jenjang pendidikan berikutnya
        </p>
    </div>


    <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0">
        <div>
            <div
                class="flex justify-center items-center mb-4 w-10 h-10 rounded-lg bg-blue-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Berprestasi</h3>
            <p class="text-gray-500 dark:text-gray-400">
                Membentuk siswa yang berprestasi dalam bidang akademik.
            </p>
        </div>

        <div>
            <div
                class="flex justify-center items-center mb-4 w-10 h-10 rounded-lg bg-blue-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                    <path
                        d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z">
                    </path>
                </svg>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Bertaqwa</h3>
            <p class="text-gray-500 dark:text-gray-400">
                Membentuk karakter siswa yang beriman dan bertaqwa
            </p>
        </div>

        <div>
            <div
                class="flex justify-center items-center mb-4 w-10 h-10 rounded-lg bg-blue-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z">
                    </path>
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Terampil</h3>
            <p class="text-gray-500 dark:text-gray-400">
                Membentuk siswa yang juga berprestasi dalam bidang non-akademik.
            </p>
        </div>
        
        <div>
            <div
                class="flex justify-center items-center mb-4 w-10 h-10 rounded-lg bg-blue-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                    </path>
                </svg>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Berkarakter</h3>
            <p class="text-gray-500 dark:text-gray-400">
                Membentuk siswa yang unggul dalam budaya pembiasaan dan pelestarian.
            </p>
        </div>
    </div>
</div>

{{-- image slider untuk berita terbaru --}}

<div class="relative bg-whiite px-6 pt-16 pb-20 lg:px-8 lg:pt-24 lg:pb-28">
    <div class="absolute inset-0">
        <div class="h-1/3 bg-white sm:h-2/3"></div>
    </div>
    <div class="relative mx-auto max-w-7xl">
        <div class="text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Berita Terbaru</h2>
            <p class="mx-auto mt-3 max-w-2xl text-xl text-gray-500 sm:mt-4">
                Berita terbaru akan selalu diupdate secara berkala
            </p>
        </div>

        <div class="mx-auto mt-12 grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-3">

            <div class="flex flex-col overflow-hidden rounded-lg ring-1 ring-gray-500 hover:shadow-orange-500 hover:shadow-lg">
                <div class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80" alt="">
                </div>
                <div class="flex flex-1 flex-col justify-between bg-white p-6">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-indigo-600">
                            <a href="#" class="hover:underline">Article</a>
                        </p>

                        <a href="#" class="mt-2 block">
                            <p class="text-xl font-semibold text-gray-900">Boost your conversion rate</p>
                            <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.</p>
                        </a>
                    </div>

                    <div class="mt-6 flex items-center">
                        <div class="flex-shrink-0">
                            <a href="#">
                            <span class="sr-only">Roel Aufderehar</span>
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                            </a>
                        </div>

                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">
                            <a href="#" class="hover:underline">Roel Aufderehar</a>
                            </p>
                            <div class="flex space-x-1 text-sm text-gray-500">
                            <time datetime="2020-03-16">Mar 16, 2020</time>
                            <span aria-hidden="true">·</span>
                            <span>6 min read</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col overflow-hidden rounded-lg ring-1 ring-gray-500 hover:shadow-orange-500 hover:shadow-lg">
                <div class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80" alt="">
                </div>

                <div class="flex flex-1 flex-col justify-between bg-white p-6">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-indigo-600">
                            <a href="#" class="hover:underline">Video</a>
                        </p>
                        <a href="#" class="mt-2 block">
                            <p class="text-xl font-semibold text-gray-900">How to use search engine optimization to drive sales</p>
                            <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit
                            facilis asperiores porro quaerat doloribus, eveniet dolore. Adipisci tempora aut inventore optio animi.,
                            tempore temporibus quo laudantium.</p>
                        </a>
                    </div>

                    <div class="mt-6 flex items-center">
                        <div class="flex-shrink-0">
                            <a href="#">
                            <span class="sr-only">Brenna Goyette</span>
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                            </a>
                        </div>

                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">
                                <a href="#" class="hover:underline">Brenna Goyette</a>
                            </p>
                            <div class="flex space-x-1 text-sm text-gray-500">
                                <time datetime="2020-03-10">Mar 10, 2020</time>
                                <span aria-hidden="true">·</span>
                                <span>4 min read</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col overflow-hidden rounded-lg ring-1 ring-gray-500 hover:shadow-orange-500 hover:shadow-lg">
                <div class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1492724441997-5dc865305da7?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80" alt="">
                </div>

                <div class="flex flex-1 flex-col justify-between bg-white p-6">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-indigo-600">
                            <a href="#" class="hover:underline">Case Study</a>
                        </p>

                        <a href="#" class="mt-2 block">
                            <p class="text-xl font-semibold text-gray-900">Improve your customer experience</p>
                            <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
                            harum rerum voluptatem quo recusandae magni placeat saepe molestiae, sed excepturi cumque corporis
                            perferendis hic.</p>
                        </a>
                    </div>

                    <div class="mt-6 flex items-center">
                        <div class="flex-shrink-0">
                            <a href="#">
                                <span class="sr-only">Daniela Metz</span>
                                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                            </a>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">
                                <a href="#" class="hover:underline">Daniela Metz</a>
                            </p>

                            <div class="flex space-x-1 text-sm text-gray-500">
                                <time datetime="2020-02-12">Feb 12, 2020</time>
                                <span aria-hidden="true">·</span>
                                <span>11 min read</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="flex justify-center mt-12">
        <button type="button" class="text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-orange-300 font-semibold rounded-lg text-sm px-7 py-3 text-center inline-flex items-center">
            Selengkapnya
        </button>
    </div>

</div>


{{-- Sekilas Informasi --}}
<div class="lg:py-16 py-8">
    <div class="px-4 mx-auto mb-8 max-w-screen-md text-center md:mb-16 lg:px-0">
        <p class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 md:text-4xl">
            Sekilas Informasi
        </p>

        <div>
            <a href="#"
                class="inline-flex justify-center items-center text-base text-blue-700 hover:text-primary-800 dark:text-primary-500 dark:hover:text-primary-700">
                Lihat Selengkapnya
                <svg class="ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>
    <div class="mx-auto max-w-screen-xl">
        <div id="animation-carousel" class="relative px-16 sm:px-24" data-carousel="slide">
            <div class="overflow-hidden relative h-48 rounded-lg sm:h-64 xl:h-80 2xl:h-80">
                <div class="grid hidden absolute inset-0 gap-8 transition-all duration-700 ease-linear transform lg:grid-cols-2"
                    data-carousel-item="">
                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/social-proof/carousel-slider/office-work.png"
                        class="block w-full h-full rounded-lg" alt="...">
                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/social-proof/carousel-slider/office.png"
                        class="hidden w-full h-full rounded-lg lg:block" alt="...">
                </div>
                <div class="grid hidden absolute inset-0 gap-8 transition-all duration-700 ease-linear transform lg:grid-cols-2"
                    data-carousel-item="">
                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/social-proof/carousel-slider/conference.png"
                        class="block w-full h-full rounded-lg" alt="...">
                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/social-proof/carousel-slider/girl-with-phone.png"
                        class="hidden w-full h-full rounded-lg lg:block" alt="...">
                </div>
                <div class="grid hidden absolute inset-0 gap-8 transition-all duration-700 ease-linear transform lg:grid-cols-2"
                    data-carousel-item="">
                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/social-proof/carousel-slider/man-at-office.png"
                        class="block w-full h-full rounded-lg" alt="...">
                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/social-proof/carousel-slider/meeting.png"
                        class="hidden w-full h-full rounded-lg lg:block" alt="...">
                </div>
                <div class="grid hidden absolute inset-0 gap-8 transition-all duration-700 ease-linear transform lg:grid-cols-2"
                    data-carousel-item="">
                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/social-proof/carousel-slider/work-from-home.png"
                        class="block w-full h-full rounded-lg" alt="...">
                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/social-proof/carousel-slider/workspace.png"
                        class="hidden w-full h-full rounded-lg lg:block" alt="...">
                </div>
            </div>
            <button type="button"
                class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-prev="">
                <span
                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 dark:bg-white/30 bg-gray-800/30 dark:group-hover:bg-white/50 group-hover:bg-gray-800/60 group-focus:ring-4 dark:group-focus:ring-white group-focus:ring-gray-800/70 group-focus:outline-none">
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
                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 dark:bg-white/30 bg-gray-800/30 dark:group-hover:bg-white/50 group-hover:bg-gray-800/60 group-focus:ring-4 dark:group-focus:ring-white group-focus:ring-gray-800/70 group-focus:outline-none">
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
    <dl
        class="grid grid-cols-2 gap-8 mx-auto mt-8 max-w-screen-xl text-gray-900 lg:mt-14 sm:grid-cols-3 xl:grid-cols-5 dark:text-white">
        <div class="flex flex-col justify-center items-center">
            <dt class="mb-2 text-3xl font-extrabold md:text-4xl">20+</dt>
            <dd class="font-light text-gray-500 dark:text-gray-400">Tendik</dd>
        </div>
        <div class="flex flex-col justify-center items-center">
            <dt class="mb-2 text-3xl font-extrabold md:text-4xl">17+</dt>
            <dd class="font-light text-gray-500 dark:text-gray-400">Penghargaan Nasional</dd>
        </div>
        <div class="flex flex-col justify-center items-center">
            <dt class="mb-2 text-3xl font-extrabold md:text-4xl">4+</dt>
            <dd class="font-light text-gray-500 dark:text-gray-400">Penghargaan Internasional</dd>
        </div>
        <div class="flex flex-col justify-center items-center">
            <dt class="mb-2 text-3xl font-extrabold md:text-4xl">100+</dt>
            <dd class="font-light text-gray-500 dark:text-gray-400">Siswa</dd>
        </div>
        <div class="flex flex-col justify-center items-center">
            <dt class="mb-2 text-3xl font-extrabold md:text-4xl">10+</dt>
            <dd class="font-light text-gray-500 dark:text-gray-400">Organisasi</dd>
        </div>
        
    </dl>
</div>

{{-- Hubungi Kami --}}

<div class="bg-[url('../../public/img/homeImage2.png')] bg-no-repeat bg-cover bg-center bg-blend-multiply ">
    <div class="px-4 lg:pt-24 pt-8 pb-72 lg:pb-80 mx-auto max-w-screen-sm text-center lg:px-6 ">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white">Contact Us</h2>
        <p class="mb-16 font-light text-gray-400 sm:text-xl">We use an agile approach to test assumptions and connect with the needs of your audience early and often.</p>
    </div> 
</div>
<div class="py-16 px-4 mx-auto -mt-96 max-w-screen-xl sm:pt-24 lg:px-6 ">
    <div class="space-y-8 text-center md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
        <div>
            <div class="flex justify-center items-center mx-auto mb-4 w-10 h-10 bg-gray-100 rounded-full dark:bg-gray-800 lg:h-16 lg:w-16">
                <svg class="w-5 h-5 text-gray-600 lg:w-8 lg:h-8 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
            </div>
            <p class="mb-2 text-xl font-bold text-white">Email us:</p>
            <p class="mb-3 text-white">Email us for general queries, including marketing and partnership opportunities.</p>
            <a href="mailto:abc@example.com" class="font-semibold text-white hover:underline">hello@flowbite.com</a>
        </div>
        <div>
            <div class="flex justify-center items-center mx-auto mb-4 w-10 h-10 bg-gray-100 rounded-full dark:bg-gray-800 lg:h-16 lg:w-16">
                <svg class="w-5 h-5 text-gray-600 lg:w-8 lg:h-8 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path></svg>
            </div>
            <p class="mb-2 text-xl font-bold text-white">Support</p>
            <p class="mb-3 text-white">Email us for general queries, including marketing and partnership opportunities.</p>
            <a href="#" class="inline-flex py-2 px-4 text-sm font-medium text-center rounded-lg border text-white border-white hover:text-white hover:bg-primary-600 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:border-primary-500 dark:text-primary-500 dark:hover:text-white dark:hover:bg-primary-600 dark:focus:ring-primary-800">Support center</a>
        </div>
        <div>
            <div class="flex justify-center items-center mx-auto mb-4 w-10 h-10 bg-gray-100 rounded-full dark:bg-gray-800 lg:h-16 lg:w-16">
                <svg class="w-5 h-5 text-gray-600 lg:w-8 lg:h-8 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
            </div>
            <p class="mb-2 text-xl font-bold text-white">Call us:</p>
            <p class="mb-3 text-white">Call us to speak to a member of our team. We are always happy to help.</p>
            <span class="font-semibold text-white">+1 (646) 786-5060</span>
        </div>
        
    </div>
</div>

@endsection

