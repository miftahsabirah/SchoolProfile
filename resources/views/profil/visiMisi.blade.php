@extends('master')

@section('title')
Visi Misi
@endsection

@section('page_title')
    Visi Misi
@endsection
@section('content')
@include('header')
<div class="py-8 px-4 mx-auto max-w-screen-xl lg:px-12 sm:text-center lg:py-12">
    <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900">
        VISI SEKOLAH
    </p>

    <p class="font-regular text-gray-500 sm:text-sm lg:text-xl">
        “TERWUJUDNYA PESERTA DIDIK YANG BERPRESTASI, TERAMPIL, BERTAQWA DAN BERKARAKTER INDONESIA”
    </p>
    
</div>

<div class="px-4 mx-auto max-w-screen-xl lg:px-12 sm:text-center mb-10">
    <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900">
        INDIKATOR VISI
    </p>

    
    <div id="accordion-open" data-accordion="open">
        <h2 id="accordion-open-heading-1">
            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-open-body-1" aria-expanded="true" aria-controls="accordion-open-body-1">
                <span class="flex items-center">
                    <svg class="w-5 h-5 me-2 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16"></path>
                    </svg>
                    Indikator Visi
                </span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
            </button>
        </h2>
        <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
            <div class="p-5 border rounded-b-xl border-gray-200 ">
                <p class="mb-2 text-gray-500 dark:text-gray-400 text-start">
                    1. Berprestasi dalam bidang akademik.  <br>
                    2. Berprestasi dalam bidang non-akademik. <br>
                    3. Unggul dalam budaya pembiasaan dan pelestarian. <br>
                    4. Beriman dan bertaqwa.
                </p>
            </div>
        </div>
    </div>
    
</div>


{{-- Misi dan Tujuan --}}
<div class="py-8 px-4 mx-auto space-y-12 max-w-screen-xl lg:space-y-20 sm:py-16 lg:px-6">
    <!-- Row -->
    <div class="gap-8 items-center lg:grid lg:grid-cols-2 xl:gap-16">
        <div class="text-gray-500 sm:text-lg dark:text-gray-400">
            <p class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 ">
                Misi Sekolah
            </p>

            <p class="mb-8 font-light lg:text-xl">
                Deliver great service experiences fast - without the complexity of traditional ITSM solutions.
                Accelerate critical development work, eliminate toil, and deploy changes with ease.
            </p>

            <!-- List -->
            <ul role="list" class="pt-8 my-7 space-y-5 border-t border-gray-200">
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-green-100 "
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                        Melaksanakan proses belajar mengajar yang efektif sehingga potensi siwa berkembang dengan optimal melalui Pembelajaran PAIKEM.
                    </span>
                </li>

                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-green-100"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                        Mengadakan media pembelajaran yang lengkap agar siswa lebih baik dalam menerima pelajaran
                    </span>
                </li>

                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-green-100"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                        Mengadakan program remidial dan pengayaan di setiap kelas agar kebutuhan siswa dalam pembelajaran terpenuhi
                    </span>
                </li>
            </ul>
            
        </div>

        <img class="hidden mb-4 w-full lg:mb-0 lg:flex rounded-lg"
            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/features/feature-office-1.png"
            alt="office feature image">
    </div>

    <!-- Row -->
    <div class="gap-8 items-center lg:grid lg:grid-cols-2 xl:gap-16">
        <img class="hidden mb-4 w-full lg:mb-0 lg:flex rounded-lg"
            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/features/feature-office-2.png"
            alt="office feature image 2">
        <div class="text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                Tujuan Sekolah
            </h2>

            <p class="mb-8 font-light lg:text-xl">
                Deliver great service experiences fast - without the
                complexity of traditional ITSM solutions.Accelerate critical development work, eliminate toil,
                and deploy changes with ease.
            </p>

            <!-- List -->
            <ul role="list" class="pt-8 my-7 space-y-5 border-t border-gray-200 dark:border-gray-700">
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-primary-600 dark:text-primary-500"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                        Membentuk peserta didik yang disiplin dan berbudaya
                    </span>
                </li>
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-primary-600 dark:text-primary-500"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                        Menanamkan kebiasaan berpikir dan berperilaku ilmiah, kritis, kreatif, inovatif, dan mandiri
                    </span>
                </li>
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-primary-600 dark:text-primary-500"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                        Mempersiapkan peserta didik untuk mampu bersaing dalam melanjutkan pendidikan ke jenjang berikutnya
                    </span>
                </li>
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-primary-600 dark:text-primary-500"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                        Meningkatkan kompetensi peserta didik untuk mengenal dan mengapresiasi ilmu pengetahuan dan teknologi sehingga unggul secara akademik dan non akademik
                    </span>
                </li>
            </ul>
            
        </div>
    </div>
</div>


@endsection