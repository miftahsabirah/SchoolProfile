@extends('master')

@section('title')
    Kurikulum
@endsection
@section('page_title')
    Kurikulum
@endsection
@section('content')
    @include('header')
    <div class="text-center m-10">

        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Sejarah
            Sekolah</h2>
    </div>

    <p class="mx-auto mt-5 max-w-6xl text-justify text-2xl text-gray-900 sm:mt-10">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae soluta qui quis doloribus eveniet nemo magnam earum
        impedit ut libero? Deleniti quos dicta a fugiat magni, culpa ratione inventore necessitatibus.
    </p>

    <div class="text-center m-10">

        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Panduan pembelajaran kurikulum 2013</h2>
        <button type="button" class="text-white bg-gradient-to-r from-orange-600 via-orange-500 to-orange-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5">
            Unduh File
            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 1v11m0 0 4-4m-4 4L4 8m11 4v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3"/>
            </svg>                
        </button> 
    </div>
@endsection
