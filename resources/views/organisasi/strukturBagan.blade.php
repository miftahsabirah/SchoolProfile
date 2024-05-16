@extends('master')

@section('title')
Struktur Organisasi
@endsection

@section('content')


<div class="flex text-sm font-medium text-center text-gray-500 border-b border-gray-200 justify-center m-4">
    <ul class="flex flex-wrap -mb-px">
        <li class="me-2">
            <a href="#" class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500" aria-current="page">Gambar Bagan</a>
        </li>
        <li class="me-2">
            <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Tugas dan Fungsi</a>
        </li>
    </ul>
</div>

<div class="flex justify-center m-6">
    <img class="h-auto max-w-full px-16" src="img/rectangle.png" alt="image description">
</div>


@endsection
