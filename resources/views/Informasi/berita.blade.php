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
                <a href="#" data-filter="guru"
                    class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 filter-link">Artikel</a>
            </li>
            <li class="me-2">
                <a href="#" data-filter="Kepala Sekolah"
                    class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 filter-link">Pengumuman</a>
            </li>
            <li class="me-2">
                <a href="#" data-filter="karyawan"
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
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="flex-shrink-0">
                                <img class="h-48 w-full object-cover"
                                    src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80"
                                    alt="">
                            </div>
                            <div class="flex flex-1 flex-col justify-between bg-white p-6">
                                <div class="flex-1">
                                    <p class="text-sm font-medium text-indigo-600">
                                        <a href="#" class="hover:underline">Article</a>
                                    </p>
                                    <a href="#" class="mt-2 block">
                                        <p class="text-xl font-semibold text-gray-900">Boost your conversion rate</p>
                                        <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit.
                                            Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi
                                            cum eos quis dolorum.</p>
                                    </a>
                                </div>
                                <div class="mt-6 flex items-center">
                                    <div class="flex-shrink-0">
                                        <a href="#">
                                            <span class="sr-only">Roel Aufderehar</span>
                                            <img class="h-10 w-10 rounded-full"
                                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                alt="">
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
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('addScript')
    <script>
        
    </script>
@endsection
