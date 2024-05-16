@extends('master')

@section('title')
Detail Guru dan Karyawan
@endsection

@section('content')

<div class="py-16 px-4 mx-auto max-w-screen-xl">
    <div class="flex flex-col lg:flex-row items-center lg:items-start justify-center lg:justify-start mb-4 lg:mb-16">
        <div class="relative">
            <img class="h-auto max-w-lg lg:w-auto" src="img/guru.png" alt="office feature image 2">
            <div class="absolute bottom--2 left-0 right-0 text-center text-white px-4 py-2 bg-blue-950">
                <p class="font-bold text-2xl">
                    Cassandra L
                </p>

                <p class="text-xl font-normal">
                    Kepala Sekolah
                </p>
            </div>
        </div>
        
        <div class="ml-0 lg:ml-20 mt-40 lg:mt-0">
            <p class="font-bold lg:text-3xl mb-2">
                Mentari Kharisma Putri, S.Pd
            </p>

            <p class="font-light lg:text-2xl text-orange-500 italic mb-10">
                STAFF / KARYAWAN
            </p>

            <hr class="h-px my-8 bg-gray-200 border-0">

            <p class="font-bold lg:text-2xl mb-2">
                PROFIL
            </p>

            <p class="font-light lg:text-xl mb-2">
                Nama : Mentari Kharisma Putri, S.Pd
            </p>

            <p class="font-light lg:text-xl mb-2">
                NIP : 199302162020122009
            </p>

            <p class="font-light lg:text-xl mb-10">
                Jabatan : Guru Kelas
            </p>

            <hr class="h-px my-8 bg-gray-200 border-0">

            <p class="font-bold lg:text-2xl mb-2">
                INFORMASI KONTAK
            </p>

            <div>
                <p class="font-light lg:text-2xl">
                    Nomor Statistik Sekolah (NSS) : 101040106017
                </p>
            </div>
        </div>
    </div>
</div>

{{-- tabs --}}
<!--Tabs navigation-->
<ul
  class="mb-5 flex list-none flex-row flex-wrap border-b-0 ps-0"
  role="tablist"
  data-twe-nav-ref>
  <li role="presentation">
    <a
      href="#tabs-home"
      class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-primary data-[twe-nav-active]:text-primary dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-primary"
      data-twe-toggle="pill"
      data-twe-target="#tabs-home"
      data-twe-nav-active
      role="tab"
      aria-controls="tabs-home"
      aria-selected="true"
      >Home</a
    >
  </li>
  <li role="presentation">
    <a
      href="#tabs-profile"
      class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-primary data-[twe-nav-active]:text-primary dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-primary"
      data-twe-toggle="pill"
      data-twe-target="#tabs-profile"
      role="tab"
      aria-controls="tabs-profile"
      aria-selected="false"
      >Profile</a
    >
  </li>
  <li role="presentation">
    <a
      href="#tabs-messages"
      class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-primary data-[twe-nav-active]:text-primary dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-primary"
      data-twe-toggle="pill"
      data-twe-target="#tabs-messages"
      role="tab"
      aria-controls="tabs-messages"
      aria-selected="false"
      >Messages</a
    >
  </li>
  <li role="presentation">
    <a
      href="#tabs-contact"
      class="disabled pointer-events-none my-2 block border-x-0 border-b-2 border-t-0 border-transparent bg-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-400 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent dark:text-neutral-600"
      data-twe-toggle="pill"
      data-twe-target="#tabs-contact"
      role="tab"
      aria-controls="tabs-contact"
      aria-selected="false"
      >Contact</a
    >
  </li>
</ul>

<!--Tabs content-->
<div class="mb-6">
  <div
    class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-home"
    role="tabpanel"
    aria-labelledby="tabs-home-tab"
    data-twe-tab-active>
    Tab 1 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-profile"
    role="tabpanel"
    aria-labelledby="tabs-profile-tab">
    Tab 2 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-messages"
    role="tabpanel"
    aria-labelledby="tabs-profile-tab">
    Tab 3 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-contact"
    role="tabpanel"
    aria-labelledby="tabs-contact-tab">
    Tab 4 content
  </div>
</div>


@endsection