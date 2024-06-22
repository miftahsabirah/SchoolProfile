@extends('master')

@section('title')
Home
@endsection

@section('content')




<div class="lg:py-16 py-8">
    <div class="px-4 mx-auto mb-2 max-w-screen-md text-center md:mb-3 lg:px-0">
        <p class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 md:text-4xl">
            kkkkkkkkkkkkkk
        </p>

        <div>
            <p class="mx-auto mt-3 mb-10 max-w-2xl text-xl text-gray-500 sm:mt-4">
                kkkkkkkkkkkkkkkkkkk
            </p>
        </div>
    </div>
    <div class="mx-auto max-w-screen-xl">
        <div id="animation-carousel" class="relative px-16 sm:px-24" data-carousel="slide">
            <div class="overflow-hidden relative h-[70vh] rounded-lg">
                <div class="grid hidden absolute inset-0 gap-8 transition-all duration-900 ease-linear transform lg:grid-cols-3"
                    data-carousel-item="">
                    <div class="w-full h-full rounded-lg overflow-hidden transition-transform duration-300 transform hover:scale-105">
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
                    

                    <div class="w-full h-full rounded-lg overflow-hidden transition-transform duration-300 transform hover:scale-105">
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
                    

                    <div class="w-full h-full rounded-lg overflow-hidden transition-transform duration-300 transform hover:scale-105">
                        <div class="flex flex-col rounded-lg shadow-lg">
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
                data-carousel-prev="">
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

</div>

@endsection