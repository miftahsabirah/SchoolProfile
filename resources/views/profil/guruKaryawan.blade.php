@extends('master')

@section('title')
Guru Karyawan
@endsection

@section('page_title')
    Guru Karyawan
@endsection

@section('content')
@include('header')

<div class="flex text-sm font-medium text-center text-gray-500 border-b border-gray-200 justify-center m-4">
    <ul class="flex flex-wrap -mb-px">
        <li class="me-2">
            <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Semua</a>
        </li>
        <li class="me-2">
            <a href="#" class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500" aria-current="page">Guru</a>
        </li>
        <li class="me-2">
            <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Kepala Sekolah</a>
        </li>
        <li class="me-2">
            <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Staf</a>
        </li>
    </ul>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 m-4">
    @for($i = 0; $i < 4; $i++)
    <div class="relative">
        <img class="h-auto w-full" src="img/guru.png" alt="office feature image">
        <div class="absolute bottom-0 left-0 right-0 text-center text-white px-4 py-2 bg-blue-950 bg-opacity-75">
            <p class="font-bold text-2xl">
                Cassandra L
            </p>
            <p class="text-xl font-normal">
                Kepala Sekolah
            </p>
        </div>
    </div>
    @endfor
</div>

{{-- <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 m-4">
    @foreach($items as $item)
    <div class="relative">
        <img class="h-auto w-full" src="{{ $item['image'] }}" alt="{{ $item['name'] }} feature image">
        <div class="absolute bottom-0 left-0 right-0 text-center text-white px-4 py-2 bg-blue-950 bg-opacity-75">
            <p class="font-bold text-2xl">
                {{ $item['name'] }}
            </p>
            <p class="text-xl font-normal">
                {{ $item['position'] }}
            </p>
        </div>
    </div>
    @endforeach
</div> --}}




@endsection
