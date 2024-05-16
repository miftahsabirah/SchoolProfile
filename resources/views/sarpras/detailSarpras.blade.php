@extends('master')

@section('title')
Detail Sarana Prasarana
@endsection

@section('content')


<div class="lg:py-16 py-8 px-16">
    <div class="px-4 mx-auto mb-6 max-w-screen-md text-center md:mb-12 lg:px-0">
        <p class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 md:text-4xl">
            Lapangan Sepak Bola
        </p>

        <div>
            <p href="#"
                class="inline-flex justify-center items-center text-base text-blue-700 hover:text-primary-800 dark:text-primary-500 dark:hover:text-primary-700">
                SD N Ciren memiliki lapangan sepak bola berukuran luas
            </p>
        </div>
    </div>

    <div class="flex flex-wrap gap-4 justify-center">
        <div class="px-16">
            <img class="h-auto max-w-full rounded-lg" src="img/lapangan.png" alt="">
        </div>
        <div class="flex space-x-4">
            <div>
                <img class="h-auto max-w-full rounded-lg" src="img/lapangan.png" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="img/lapangan.png" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="img/lapangan.png" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="img/lapangan.png" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="img/lapangan.png" alt="">
            </div>
        </div>
    </div>
</div>


@endsection