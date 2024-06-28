@extends('master')

@section('title')
    Detail Guru dan Karyawan
@endsection

@section('content')
    <div class="py-16 px-4 mx-auto max-w-screen-xl">
        <div class="flex flex-col lg:flex-row items-center lg:items-start justify-center lg:justify-start mb-4 lg:mb-16">
            <div class="relative">
                <img class="h-auto max-w-lg lg:w-auto" src="img/guru.png" alt="office feature image 2" id="foto">
                <div class="absolute bottom--2 left-0 right-0 text-center text-white px-4 py-2 bg-blue-950">
                    <p class="font-bold text-2xl" id="nama_guru">
                    </p>
                    <p class="text-xl font-normal" id="jabatan">
                        Kepala Sekolah
                    </p>
                </div>
            </div>
            <div class="ml-0 lg:ml-20 mt-40 lg:mt-0">
                <p class="font-bold lg:text-3xl mb-2" id="nama">
                </p>

                <p class="font-light lg:text-2xl text-orange-500 italic mb-10" id="jenis_guru">
                    STAFF / KARYAWAN
                </p>

                <hr class="h-px my-8 bg-gray-200 border-0">

                <p class="font-bold lg:text-2xl mb-2">
                    PROFIL
                </p>

                <p class="font-light lg:text-xl mb-2" id="nama_detail">
                    Nama : Mentari Kharisma Putri, S.Pd
                </p>

                <p class="font-light lg:text-xl mb-2" id="nip_detail">
                    NIP : 199302162020122009
                </p>

                <p class="font-light lg:text-xl mb-10" id="jabatan_detail">
                    Jabatan : Guru Kelas
                </p>

                <hr class="h-px my-8 bg-gray-200 border-0">

                <p class="font-bold lg:text-2xl mb-2">
                    INFORMASI KONTAK
                </p>

                <div>
                    <p class="font-light lg:text-2xl" id="no_hp">
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- tabs --}}
    <!--Tabs navigation-->
    <ul class="mb-5 flex list-none flex-row flex-wrap border-b-0 ps-0" role="tablist" data-twe-nav-ref>
        <li role="presentation">
            <a href="#tabs-home"
                class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-primary data-[twe-nav-active]:text-primary dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-primary"
                data-twe-toggle="pill" data-twe-target="#tabs-home" data-twe-nav-active role="tab"
                aria-controls="tabs-home" aria-selected="true">Home</a>
        </li>
        <li role="presentation">
            <a href="#tabs-profile"
                class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-primary data-[twe-nav-active]:text-primary dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-primary"
                data-twe-toggle="pill" data-twe-target="#tabs-profile" role="tab" aria-controls="tabs-profile"
                aria-selected="false">Profile</a>
        </li>
        <li role="presentation">
            <a href="#tabs-messages"
                class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-primary data-[twe-nav-active]:text-primary dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-primary"
                data-twe-toggle="pill" data-twe-target="#tabs-messages" role="tab" aria-controls="tabs-messages"
                aria-selected="false">Messages</a>
        </li>
        <li role="presentation">
            <a href="#tabs-contact"
                class="disabled pointer-events-none my-2 block border-x-0 border-b-2 border-t-0 border-transparent bg-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-400 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent dark:text-neutral-600"
                data-twe-toggle="pill" data-twe-target="#tabs-contact" role="tab" aria-controls="tabs-contact"
                aria-selected="false">Contact</a>
        </li>
    </ul>

    <!--Tabs content-->
    <div class="mb-6">
        <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
            id="tabs-home" role="tabpanel" aria-labelledby="tabs-home-tab" data-twe-tab-active>
            Tab 1 content
        </div>
        <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
            id="tabs-profile" role="tabpanel" aria-labelledby="tabs-profile-tab">
            Tab 2 content
        </div>
        <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
            id="tabs-messages" role="tabpanel" aria-labelledby="tabs-profile-tab">
            Tab 3 content
        </div>
        <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
            id="tabs-contact" role="tabpanel" aria-labelledby="tabs-contact-tab">
            Tab 4 content
        </div>
    </div>
@endsection

@section('addScript')
    <script>
        $(document).ready(function() {
            var currentUrl = window.location.href;
            var id = currentUrl.substring(currentUrl.lastIndexOf('/') + 1);

            console.log(currentUrl);
            console.log(id);

            if (!id) {
                console.log("ID tidak ditemukan di URL");
                return;
            }

            $.ajax({
                url: "http://127.0.0.1:8000/api/getdetailguru/" + id,
                type: "GET",
                dataType: "json",
                success: function(response) {
                    if (response) {
                        var html = '';
                        var imgUrl = "http://localhost:8000/storage/post_guru_karyawan/" + response.foto;
                        $('#foto').attr('src', imgUrl);
                        $('#nama_guru').text( response.nama_guru);
                        $('#jabatan').text( response.jabatan);
                        $('#nama').text( response.nama_guru);
                        $('#jenis_guru').text( response.jenis_guru);
                        $('#nama_detail').text( response.nama_guru);
                        $('#nip_detail').text( response.nip);
                        $('#jabatan_detail').text( response.nama_jabatan);
                        $('#no_hp').text( 'Nomor HP : ' + response.nomor_telepon);
                    } else {
                        console.log("Data tidak ditemukan untuk ID yang diberikan.");
                    }
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        });
    </script>
@endsection
