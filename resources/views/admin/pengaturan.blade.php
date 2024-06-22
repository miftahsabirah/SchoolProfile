@extends('admin/master')

@section('title')
Pengaturan
@endsection


@section('content')
{{-- test --}}
<div class="bg-gray-100 flex justify-center h-screen">
    <div class="w-full max-w-4xl shadow-xl rounded-lg">
        <h2 class="text-sm font-medium px-6 py-3">Pengaturan</h2>
        <div class="bg-white p-6 rounded-br-lg rounded-bl-lg shadow-lg w-full h-screen">
        <form>
            <div class="mb-8">
                <label class="block text-sm font-medium text-gray-900 mb-2">Warna Primer dan Sekunder</label>
                <div class="flex items-center space-x-12">
                    <label class="flex flex-col items-center space-y-2">
                        <div class="flex items-center">
                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default</label>
                        </div>
                        <div class="flex mt-1 ml-10">
                            <div class="w-8 h-5 bg-blue-900"></div>
                            <div class="w-8 h-5 bg-orange-500"></div>
                        </div>
                    </label>

                    <label class="flex flex-col items-center space-y-2">
                        <div class="flex items-center">
                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Light</label>
                        </div>
                        <div class="flex mt-1 ml-14">
                            <div class="w-8 h-5 bg-blue-200"></div>
                            <div class="w-8 h-5 bg-orange-300"></div>
                        </div>
                    </label>

                    <label class="flex flex-col items-center space-y-2">
                        <div class="flex items-center">
                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Modern</label>
                        </div>
                        <div class="flex mt-1 ml-10">
                            <div class="w-8 h-5 bg-amber-300"></div>
                            <div class="w-8 h-5 bg-teal-400"></div>
                        </div>
                    </label>

                </div>
            </div>
            <div class="mb-16">
                <form class="mx-auto">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="fotoCarousel">Tambah foto carousel</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="fotoCarousel" id="fotoCarousel" type="file">
                </form>
            </div>
            <div>
                <button type="submit" class="w-full bg-blue-700 text-white p-1.5 rounded-lg hover:bg-blue-800">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>

@endsection