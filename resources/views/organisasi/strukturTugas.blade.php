@extends('master')

@section('title')
Struktur Organisasi
@endsection

@section('content')


<div class="flex text-sm font-medium text-center text-gray-500 border-b border-gray-200 justify-center m-4">
    <ul class="flex flex-wrap -mb-px">
        <li class="me-2">
            <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Gambar Bagan</a>
        </li>

        <li class="me-2">
            <a href="#" class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500" aria-current="page">Tugas dan Fungsi</a>
        </li>
        
    </ul>
</div>

<div id="accordion-open-1" data-accordion="open" class="px-4 mx-auto max-w-screen-xl lg:px-12 sm:text-center mb-10">
    <h2 id="accordion-open-heading-1">
        <button type="button" class="flex items-center justify-between w-full p-7 font-medium rtl:text-right text-gray-500 rounded-xl bg-white border-l-8 border-orange-500 shadow-lg hover:bg-gray-50" data-accordion-target="#accordion-open-body-1" aria-expanded="true" aria-controls="accordion-open-body-1">
            <span class="flex items-center">
                Kepala Sekolah
            </span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
            </svg>
        </button>
    </h2>
    <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
        <div class="p-5 mt-3 rounded-xl border-l-8 border-orange-500 shadow-lg">
            <p class="mb-2 text-gray-500 dark:text-gray-400 text-start">
                Memimpin dan mengkoordinasikan semua aktivitas di sekolah, bertanggung jawab atas kinerja seluruh staf dan siswa di sekolah.
            </p>
        </div>
    </div>
</div>


<div id="accordion-open-2" data-accordion="open" class="px-4 mx-auto max-w-screen-xl lg:px-12 sm:text-center mb-10">
    <h2 id="accordion-open-heading-2">
        <button type="button" class="flex items-center justify-between w-full p-7 font-medium rtl:text-right text-gray-500 rounded-xl bg-white border-l-8 border-orange-500 shadow-lg hover:bg-gray-50" data-accordion-target="#accordion-open-body-2">
            <span class="flex items-center">
                Wakil Kepala Sekolah
            </span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
            </svg>
        </button>
    </h2>
    <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
        <div class="p-5 mt-3 rounded-xl border-l-8 border-orange-500 shadow-lg">
            <p class="mb-2 text-gray-500 dark:text-gray-400 text-start">
                Memimpin dan mengkoordinasikan semua aktivitas di sekolah, bertanggung jawab atas kinerja seluruh staf dan siswa di sekolah.
            </p>
        </div>
    </div>
</div>

<div id="accordion-open-3" data-accordion="open" class="px-4 mx-auto max-w-screen-xl lg:px-12 sm:text-center mb-10">
    <h2 id="accordion-open-heading-3">
        <button type="button" class="flex items-center justify-between w-full p-7 font-medium rtl:text-right text-gray-500 rounded-xl bg-white border-l-8 border-orange-500 shadow-lg hover:bg-gray-50" data-accordion-target="#accordion-open-body-3">
            <span class="flex items-center">
                Wakil Kepala Sekolah
            </span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
            </svg>
        </button>
    </h2>
    <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
        <div class="p-5 mt-3 rounded-xl border-l-8 border-orange-500 shadow-lg">
            <p class="mb-2 text-gray-500 dark:text-gray-400 text-start">
                Memimpin dan mengkoordinasikan semua aktivitas di sekolah, bertanggung jawab atas kinerja seluruh staf dan siswa di sekolah.
            </p>
        </div>
    </div>
</div>



@endsection
