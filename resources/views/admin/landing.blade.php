@extends('admin/master')

@section('title')
Landing Page
@endsection
{{-- test --}}

@section('content')

<div class="flex items-center justify-center">
    <div class="w-full max-w-4xl shadow-xl rounded-lg">
        <h2 class="text-sm font-medium px-6 py-3">Settings Landing Page</h2>
        <div class="bg-white p-6 rounded-br-lg rounded-bl-lg shadow-lg w-full">
            <form>
                <div class="mb-5">
                    <label for="profilSekolah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profil Sekolah</label>
                    <input type="text" id="profilSekolah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Masukkan url profil sekolah">
                </div>
                <div class="mb-5">
                    <label for="deskripsiProfil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Profil Sekolah</label>
                    <textarea id="deskripsiProfil" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan deskripsi disini..."></textarea>
                    <div class="text-xs text-gray-500 mt-1">A note for extra info</div>
                </div>
                <div class="mb-5">
                    <label for="tentangSekolah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tentang Sekolah</label>
                    <input type="text" id="tentangSekolah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Masukkan judul">
                </div>
                <div class="mb-5">
                    <label for="deskripsiTentang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Tentang Sekolah</label>
                    <textarea id="deskripsiTentang" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan deskripsi disini..."></textarea>
                    <div class="text-xs text-gray-500 mt-1">A note for extra info</div>
                </div>
                <label class="inline-flex items-center mb-1 cursor-pointer">
                    <input type="checkbox" value="" class="sr-only peer">
                    <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Icon</span>
                </label>
                <div class="mb-5">
                    <input type="text" id="urlIcon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan url icon" required />
                </div>
                <div class="mb-5">
                    <label for="kontak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan Kontak</label>
                    <input type="text" id="kontak" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="e.g. +(12)3456 789">
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan Email</label>
                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="hello@gmail.com">
                </div>
                <div class="mb-16">
                    <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan alamat</label>
                    <input type="text" id="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Sleman, yogyakarta">
                </div>
                <div>
                    <button type="submit" class="w-full bg-blue-700 text-white p-1.5 rounded-lg hover:bg-blue-800 mb-5">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection