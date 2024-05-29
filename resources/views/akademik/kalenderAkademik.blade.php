@extends('master')

@section('title')
Kalender Akademik
@endsection

@section('content')

<div class="py-8 px-4 mx-auto space-y-12 max-w-screen-xl lg:space-y-20 sm:py-16 lg:px-6">
    
     <!-- Row -->
     <div class="gap-8 items-center lg:grid lg:grid-cols-2 xl:gap-16">
        <img class="hidden mb-4 w-full lg:mb-0 lg:flex rounded-lg"
            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/features/feature-office-2.png"
            alt="office feature image 2">
        <div class="text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                Tahun Akademik 2021/2022
            </h2>

            <p class="mb-8 font-light lg:text-xl">
                Flowbite helps you connect with friends, family and communities of people who share your interests. 
                Connecting with your friends and family as well as discovering new ones is easy with features like Groups.
            </p>

            <button type="button" class="text-white bg-gradient-to-r from-orange-600 via-orange-500 to-orange-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Unduh File
                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 1v11m0 0 4-4m-4 4L4 8m11 4v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3"/>
                </svg>                
            </button>            


            
        </div>
    </div>
    
    <!-- Row -->
    <div class="gap-8 items-center lg:grid lg:grid-cols-2 xl:gap-16">
        <div class="text-gray-500 sm:text-lg dark:text-gray-400">
            <p class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 ">
                Tahun Akademik 2022/2023
            </p>

            <p class="mb-8 font-light lg:text-xl">
                Deliver great service experiences fast - without the complexity of traditional ITSM solutions.
                Accelerate critical development work, eliminate toil, and deploy changes with ease.
            </p>

            <button type="button" class="text-white bg-gradient-to-r from-orange-600 via-orange-500 to-orange-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Unduh File
                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 1v11m0 0 4-4m-4 4L4 8m11 4v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3"/>
                </svg>                
            </button> 
            
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
                Tahun Akademik 2023/2024
            </h2>

            <p class="mb-8 font-light lg:text-xl">
                Deliver great service experiences fast - without the
                complexity of traditional ITSM solutions.Accelerate critical development work, eliminate toil,
                and deploy changes with ease.
            </p>

            <button type="button" class="text-white bg-gradient-to-r from-orange-600 via-orange-500 to-orange-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Unduh File
                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 1v11m0 0 4-4m-4 4L4 8m11 4v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3"/>
                </svg>                
            </button> 

            
        </div>
    </div>

</div>

@endsection